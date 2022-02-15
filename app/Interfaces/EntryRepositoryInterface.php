<?php

namespace App\Interfaces;

interface EntryRepositoryInterface
{
  public function createEntry(array $entryDetails);
  public function getAllEntry();
  public function getEntryById($entryId);
  public function updateEntry($entryId, $newDetails);
  public function deleteEntry($entryId);

}

