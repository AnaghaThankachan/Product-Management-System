<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\productcategory;
use App\Models\products;
use App\Models\branch;

class admin extends Controller
{
    public function login()
    {
        $a="";
        // die(Crypt::encrypt('fazz'));
        return view('admin.login',['a'=>$a]);
    }

    public function adminlogin(Request $req)
    {
        if(DB::table('admin')->where('username',$req->username)->exists())
        {
            $b=DB::table('admin')->where('username',$req->username)->first();
            $c=Crypt::decrypt($b->password);
            if($req->Password == $c)
            {
                Session::put('login',$b->id);
                return redirect('add');
            }
            else
            {
                $a="Wrong Password";
            }
        }
        else
        {
            $a="Wrong Username";
        }
        return redirect('login')->with('a',$a);
    }


    public function change_password()
    {
        return view('admin.change_password');
    }

 #------------------------PRODUCT CATEGORY-------------------------#

    public function pro_cat_add()
    {
        return view('product_category.add');
    }
    public function productCat(Request $req)
    {
        $in=new  productcategory;
        $in->name=$req->pro_cat_name;       
        $in->code=$req->pro_cat_code;
        $in->save();
        return redirect('add');       
    }

    public function pro_cat_list()
    {
        $in= productcategory::orderBy('id','asc')->get();
        return view('product_category.list',['lst'=>$in]);
    }
    public function pro_cat_edit(Request $a,$b)
    {
        $c=productcategory::find($b);
        return view('product_category.edit',['lst'=>$c]);
    }
    public function procat_edit(Request $a,$b)
    {
        $in=productcategory::find($b);
        $in->name=$a->pro_cat_name;       
        $in->code=$a->pro_cat_code;
        $in->status=$a->status;
        $in->save();
        return redirect('list/');       
    }
    public function pro_cat_delete(Request $a,$b)
    {
        $in=productcategory::find($b);
        $in->delete();
        return redirect('list/');       
    }

 #-------------------------PRODUCT---------------------------#


    public function pro_add()
    {
        $tableValues = productcategory::all();
        return view('product.product_add',['tableValues' => $tableValues]);
    }

    public function proadd(Request $req)
    {
        $in=new products;
        $in->category_id=$req->productCategory;
        $in->product_name=$req->pro_name;
        $in->product_code=$req->pro_code;
        $imageName = time() . '.' . $req->customFile->extension();
        $req->customFile->move(public_path('uploads'), $imageName);
        $in->image = $imageName;
        $in->save();
        return redirect('pro_add');
    }

    public function pro_list()
    {
        $in= products::orderBy('id','asc')->get();
        $cat= productcategory::all();
        return view('product.product_list',['lst'=>$in],['cat'=>$cat]);
    }

    public function pro_edit(Request $a,$b)
    {
        $c=products::find($b);
        $cat= productcategory::all();
        return view('product.product_edit',['lst'=>$c],['cat'=>$cat]);
    }
    public function proedit(Request $a,$b)
    {
        $a->validate(['pro_name'=>'required | unique:products,product_name,'.$b,'pro_code'=>'required | unique:products,product_code,'.$b]);
        $c=products::find($b);
        $c->category_id=$a->productCategory;
        $c->product_name=$a->pro_name;
        $c->product_code=$a->pro_code;
        $c->status=$a->status;
        $c->save();
        return redirect('pro_list/');
    }

    public function prodelete(Request $a,$b)
    {
        $in=products::find($b);
        $in->delete();
        return redirect('pro_list/');       
    }


#---------------------------BRANCH-----------------------------#


    public function branch_add()
    {
        $tableValues = branch::all();
        return view('branch.branch_add',['tableValues' => $tableValues]);
    }

    public function branchadd(Request $req)
    {
        $in=new branch;
        $in->branch_name=$req->branchName;
        $in->branch_code=$req->branchCode;
        $in->contact=$req->contact;
        $in->contact_person=$req->contactPerson;
        $in->password= Crypt::encrypt($req->password);
        $in->save();
        return redirect('branch_add');
    }

    public function branch_list()
    {
        $in= branch::orderBy('id','asc')->get();
        return view('branch.branch_list',['lst'=>$in]);
    }

    public function branch_edit(Request $a,$b)
    {
        $c=branch::find($b);
        return view('branch.branch_edit',['lst'=>$c]);
    }

    public function branchedit(Request $a,$b)
    {
        $in=branch::find($b);
        $in->branch_name=$a->branchName;
        $in->branch_code=$a->branchCode;
        $in->contact=$a->contact;
        $in->contact_person=$a->contactPerson;
        $in->password=$a->password;
        $in->status=$a->status;
        $in->save();
        return redirect('branch_list/');  
    }

    public function branchdelete(Request $a,$b)
    {
        $in=branch::find($b);
        $in->delete();
        return redirect('branch_list/');       
    }

    public function logout()
    {
        Session::flush();
        return redirect('login/');       
    }

}
