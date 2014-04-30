<?php

class Book extends Eloquent {

  protected $fillable = array('title', 'description');
  protected $guarded = array('id');
}
