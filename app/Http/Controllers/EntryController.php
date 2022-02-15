<?php

namespace App\Http\Controllers;
use App\Models\Entry;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Interfaces\EntryRepositoryInterface;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\EntryRequest;
use Illuminate\Http\Response;

class EntryController extends Controller
{
  private EntryRepositoryInterface $entryRepository;

  public function __construct(EntryRepositoryInterface $entryRepository)
  {
    $this->entryRepository = $entryRepository;
  }

  public function index(): JsonResponse
  {
    return response()->json([
      'data' => $this->entryRepository->getAllEntry()
    ]);
  }

  public function store(EntryRequest $request): JsonResponse
  {
    
    $validated = $request->validated();
    $this->authorize('update', $validated);
    return response()->json([
      'data' => $this->entryRepository->createEntry($validated)
    ],
    Response::HTTP_CREATED
    );
  }

  public function update(EntryRequest $request ): JsonResponse
  { 
    $entryId = $request->route('id');
    $validated = $request->validated();

    $this->authorize('update', $entryId);

    return response()->json([
      'data' => $this->entryRepository->updateEntry($entryId, $validated)
    ]);
  }

  public function show(Request $request): JsonResponse
  {
       $entryId = $request->route('id');

        return response()->json([
            'data' => $this->entryRepository->getEntryById($entryId)
        ]); 
  }

  public function destroy(Request $request): JsonResponse
  {
     $entryId = $request->route('id');
        $this->entryRepository->deleteEntry($entryId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
  }
  
  public function getUrl(){
    return url("entries/$this->slug->$this->id");
  }

 // Mutator 
    public function setTitleAttribute($value)
    {
      $this->attributes['title']=$value;
    	$this->attributes['slug']=Str::slug($value);
    }

}
