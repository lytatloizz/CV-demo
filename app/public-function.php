<?php

use App\Models\Carts;
use App\Models\Manufactures;
use App\Models\Protypes;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

function exchange_price($price)
{
    return round($price / 23000);
}

function get_manu_name($manu_id)
{
    $manu = Manufactures::find($manu_id);
    if ($manu->manu_status == 0) {
        return $manu->manu_name;
    }
    return "Unknown";
}

function get_type_name($type_id)
{
    $type = Protypes::find($type_id);
    if ($type->type_status == 0) {
        return $type->type_name;
    }
    return "Unknown";
}

function get_feature_name($feature)
{
    if ($feature == 0) {
        return "New product";
    }
    return "Hot sale";
}

function get_user_role($user_id)
{
    return User::find($user_id)->user_role;
}

function get_user_role_name($user_role)
{
    switch ($user_role) {
        case 1:
            return 'staff';
            break;
        case 0:
            return 'admin';
            break;
        case 2:
            return 'customer';
            break;
        default:
            return "Don't try break my code please";
            break;
    }
}

function check_auth()
{
    return Auth::check();
}

function check_product_exists_in_shop_carts($product_id){
    $cart = Carts::where('product_id', $product_id)->first();
    if($cart){
        return true;
    }
    return false;
}
