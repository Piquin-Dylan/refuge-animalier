<?php

it('Test to see the current language',function (){
    Session::put('locale','fr');

    $this->get('/lang/en');

    expect(Session::get('locale'))->toBe('en');

});
