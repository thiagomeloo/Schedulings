<?php

use Illuminate\Support\Facades\Schema;

it('should to exist a entity table', function(){

    expect(Schema::hasTable('entities'))->ToBeTrue();

});

it('should to exists columns table', function(){

    $columns = Schema::getColumnListing('entities');

    expect($columns)->toMatchArray(['id', 'name', 'avatar', 'created_at', 'updated_at']);

});


