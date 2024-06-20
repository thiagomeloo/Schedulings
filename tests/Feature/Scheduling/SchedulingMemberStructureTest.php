<?php

use Illuminate\Support\Facades\Schema;

it('should to exist a scheduling member table', function(){

    expect(Schema::hasTable('scheduling_members'))->ToBeTrue();

});

it('should to exists columns table', function(){

    $columns = Schema::getColumnListing('scheduling_members');

    expect($columns)->toMatchArray([
        'id',
        'scheduling_id',
        'scheduled_by',
        'cancelled_by',
        'member_id',
        'confirmed_at',
        'rejected_at',
        'cancelled_at',
        'organizer',
        'showed_up',
        'created_at',
        'updated_at'
    ]);

});
