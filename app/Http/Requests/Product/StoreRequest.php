<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'bail|required|min:10|max:255',
            'image' => 'bail|required|mimes:jpg,png,jepg|max:5048',
            'image_list' => 'bail|required',
            'description' => 'bail|required',
            'category' => 'bail|required',
            'unit' => 'bail|required',
            'quantity' => 'bail|required',
            'price' => 'bail|required',
            'price_sale' => 'bail|required',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Tên sản phẩm không được để trống',
            'image.required' => 'Ảnh sản phẩm không được để trống',
            'image_list.required' => 'Tên sản phẩm không được để trống',
            'description.required' => 'Mô tả sản phẩm không được để trống',
            'category.required' => 'Danh mục sản phẩm không được để trống',
            'unit.required' => 'Đơn vị sản phẩm không được để trống',
            'quantity.required' => 'Số lượng sản phẩm không được để trống',
            'price.required' => 'Giá sản phẩm không được để trống',
            'price_sale.required' => 'Giá sản phẩm không được để trống',
        ];
    }
}
