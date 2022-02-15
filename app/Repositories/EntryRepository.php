<?php 

namespace App\Repositories;

use App\Interfaces\EntryRepositoryInterface;
use App\Models\Entry;

class EntryRepository implements EntryRepositoryInterface
{
  protected $entry;

  public function __construct(Entry $entry)
  {
    $this->entry = $entry; 
  } 

  public function createEntry(array $entryDetails)
  {
    return $this->entry->create($entryDetails);
  }

  public function getAllEntry()
  {
    return $this->entry->all();
  }

  public function getEntryById($entryId)
  {
    return $this->entry->findOrFail($entryId);
  }
  public function updateEntry($entryId, $newDetails)
  {
    return $this->entry->where('id',$entryId)->update($newDetails);
  }
  public function deleteEntry($entryId)
  {
    return $this->entry->destroy($entryId);
  }

}

