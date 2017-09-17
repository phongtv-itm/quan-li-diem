<?php

function public_url($url ='')
{
    return base_url('public/'.$url);
}

function mypage_url($url=''){
    return base_url('public/site/'.$url);
}

function upload_url($url=''){
    return base_url('upload/'.$url);
}
