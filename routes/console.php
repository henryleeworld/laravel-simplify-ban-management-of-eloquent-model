<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('ban:delete-expired')->everyMinute();
