<?php

use App\Models\SiteSetting;

function siteSetting()
{
  return SiteSetting::first();
}