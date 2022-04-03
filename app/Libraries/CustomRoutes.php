<?php

namespace App\Libraries;


class CustomRoutes
{

  public function GetCustomRutes()
  {

    $modelPosts = new \App\Models\RutasModel();

    return( $modelPosts->GetRoutes());

  }

}