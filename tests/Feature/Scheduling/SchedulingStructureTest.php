<?php

use Illuminate\Support\Facades\Schema;

it('should to exist a scheduling table', function(){

    expect(Schema::hasTable('schedulings'))->ToBeTrue();

});

it('should to exists columns table', function(){

    $columns = Schema::getColumnListing('schedulings');

    expect($columns)->toMatchArray([
        'id',
        'entity_id',
        'create_by',
        'title',
        'description',
        'schedule_at',
        'created_at',
        'updated_at'
    ]);

});
