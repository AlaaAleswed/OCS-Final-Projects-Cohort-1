@extends('coloringRoll.layout.master')

@section('title', 'Cart')

@section('content')

 

      <!-- breadcrumb area start -->
      <div class="it-breadcrumb-area it-breadcrumb-height black-bg p-relative fix">
         <div class="it-breadcrumb-shape-1">
            <img src="{{ asset('coloringRoll/img/breadcurmb/shape-1-1.png')}}" alt="">
         </div>
         <div class="it-breadcrumb-shape-2">
            <img src="{{ asset('coloringRoll/img/breadcurmb/shape-1-2.png')}}" alt="">
         </div>
         <div class="it-breadcrumb-shape-3">
            <img src="{{ asset('coloringRoll/img/breadcurmb/shape-1-3.png')}}" alt="">
         </div>
         <div class="it-breadcrumb-shape-5">
            <img src="{{ asset('coloringRoll/img/breadcurmb/shape-1-5.png')}}" alt="">
         </div>
         <div class="it-breadcrumb-shape-6">
            <img src="{{ asset('coloringRoll/img/breadcurmb/shape-1-6.png')}}" alt="">
         </div>
         <div class="it-breadcrumb-shape-7">
            <img src="{{ asset('coloringRoll/img/breadcurmb/shape-1-5.png')}}" alt="">
         </div>
         <div class="it-breadcrumb-shape-8">
            <img src="{{ asset('coloringRoll/img/breadcurmb/shape-1-7.png')}}" alt="">
         </div>
         <div class="it-breadcrumb-shape-9">
            <img src="{{ asset('coloringRoll/img/breadcurmb/shape-1-8.png')}}" alt="">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="it-breadcrumb-content z-index text-center">
                     <div class="it-breadcrumb-section-title-box mb-20">
                        <h3 class="it-breadcrumb-title">Cart</h3>
                     </div>
                     <div class="it-breadcrumb-list">
                        <span><a href="index.html">Home</a></span>
                        <span class="dvdr"><i>//</i></span>
                        <span class="color">Cart</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb area end -->

      <!-- cart-area-start -->
      <section class="cart-area pt-120 pb-120">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <form action="cart.html#">
                     <div class="table-content table-responsive wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".3s"
                        style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.3s; animation-name: tpfadeUp;">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th class="product-thumbnail">Images</th>
                                 <th class="cart-product-name">Product</th>
                                 <th class="product-price">Unit Price</th>
                                 <th class="product-quantity">Quantity</th>
                                 <th class="product-subtotal">Total</th>
                                 <th class="product-remove">Remove</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="product-thumbnail"><a href="https://ordainit.com/html/kiden/product-details.html"><img
                                          src="{{ asset('coloringRoll/img/cart/cart-1.png')}}" alt=""></a></td>
                                 <td class="product-name"><a href="https://ordainit.com/html/kiden/product-details.html">School Bag</a></td>
                                 <td class="product-price"><span class="amount">$180.00</span></td>
                                 <td class="product-quantity">
                                    <span class="it-cart-minus cart-minus">-</span>
                                    <input class="cart-input" type="text" value="1">
                                    <span class="it-cart-plus cart-plus">+</span>
                                 </td>
                                 <td class="product-subtotal"><span class="amount">$760.00</span></td>
                                 <td class="product-remove"><a href="cart.html#"><i class="fa fa-times"></i></a></td>
                              </tr>
                              <tr>
                                 <td class="product-thumbnail"><a href="https://ordainit.com/html/kiden/product-details.html"><img
                                          src="{{ asset('coloringRoll/img/cart/cart-2.png')}}" alt=""></a></td>
                                 <td class="product-name"><a href="https://ordainit.com/html/kiden/product-details.html">Note book</a>
                                 </td>
                                 <td class="product-price"><span class="amount">$1260.50</span></td>
                                 <td class="product-quantity">
                                    <span class="it-cart-minus cart-minus">-</span>
                                    <input class="cart-input" type="text" value="1">
                                    <span class="it-cart-plus cart-plus">+</span>
                                 </td>
                                 <td class="product-subtotal"><span class="amount">$90.50</span></td>
                                 <td class="product-remove"><a href="cart.html#"><i class="fa fa-times"></i></a></td>
                              </tr>
                              <tr>
                                 <td class="product-thumbnail"><a href="https://ordainit.com/html/kiden/product-details.html"><img
                                          src="{{ asset('coloringRoll/img/cart/cart-3.png')}}" alt=""></a></td>
                                 <td class="product-name"><a href="https://ordainit.com/html/kiden/product-details.html">Book</a></td>
                                 <td class="product-price"><span class="amount">$180.00</span></td>
                                 <td class="product-quantity">
                                    <span class="it-cart-minus cart-minus">-</span>
                                    <input class="cart-input input" type="text" value="1">
                                    <span class="it-cart-plus cart-plus">+</span>
                                 </td>
                                 <td class="product-subtotal"><span class="amount">$760.00</span></td>
                                 <td class="product-remove"><a href="cart.html#"><i class="fa fa-times"></i></a></td>
                              </tr>
                              <tr>
                                 <td class="product-thumbnail"><a href="https://ordainit.com/html/kiden/product-details.html"><img
                                          src="{{ asset('coloringRoll/img/cart/cart-4.png')}}" alt=""></a></td>
                                 <td class="product-name"><a href="https://ordainit.com/html/kiden/product-details.html">Pencell</a>
                                 </td>
                                 <td class="product-price"><span class="amount">$1260.50</span></td>
                                 <td class="product-quantity">
                                    <span class="it-cart-minus cart-minus">-</span>
                                    <input class="cart-input input" type="text" value="1">
                                    <span class="it-cart-plus cart-plus">+</span>
                                 </td>
                                 <td class="product-subtotal"><span class="amount">$90.50</span></td>
                                 <td class="product-remove"><a href="cart.html#"><i class="fa fa-times"></i></a></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="row">
                        <div class="col-12">
                           <div class="coupon-all">
                              <div class="coupon">
                                 <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                    placeholder="Coupon code" type="text">
                                 <button class="it-btn circle-effect" name="apply_coupon" type="submit"><span>Apply
                                       coupon</span></button>
                              </div>
                              <div class="coupon2">
                                 <button class="it-btn circle-effect" name="update_cart" type="submit"><span>Update
                                       cart</span></button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row justify-content-end">
                        <div class="col-md-5 ">
                           <div class="cart-page-total">
                              <h2>Cart totals</h2>
                              <ul class="mb-20">
                                 <li>Subtotal <span>$250.00</span></li>
                                 <li>Total <span>$250.00</span></li>
                              </ul>
                              <a class="it-btn circle-effect" href="checkout.html"><span>Proceed to checkout</span></a>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!-- cart-area-end -->


@endsection