@extends('coloringRoll.layout.master')

@section('title', 'Gallery')

@section('content')

 <main>

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
                        <h3 class="it-breadcrumb-title">Gallery</h3>
                     </div>
                     <div class="it-breadcrumb-list">
                        <span><a href="index.html">Home</a></span>
                        <span class="dvdr"><i>//</i></span>
                        <span class="color">Gallery</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb area end -->

      <!-- gallery-area-start -->
      <div class="it-gallery-area pt-120 pb-90">
         <div class="container">
            <div class="row gx-35">
               <div class="col-xl-12">
                  <div class="tp-gallery-filter d-flex justify-content-between masonary-menu text-center mb-80">
                     <button data-filter="*" class="active"><span>All</span></button>
                     <button data-filter=".cat1"><span>Development</span></button>
                     <button data-filter=".cat2"><span>Marketing</span></button>
                     <button data-filter=".cat3"><span>Design</span></button>
                  </div>
               </div>
            </div>
            <div class="row grid">
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-35 grid-item cat1">
                  <div class="it-gallery-item p-relative">
                     <div class="it-gallery-thumb">
                        <img src="{{ asset('coloringRoll/img/gallery/thumb-1-1.jpg')}}" alt="">
                     </div>
                     <div class="it-gallery-thumb-icon">
                        <a class="popup-image" href="{{ asset('coloringRoll/img/gallery/thumb-1-1.jpg')}}">
                           <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M19.2188 9.21875H10.7812V0.78125C10.7812 0.349766 10.4315 0 10 0C9.56852 0 9.21875 0.349766 9.21875 0.78125V9.21875H0.78125C0.349766 9.21875 0 9.56852 0 10C0 10.4315 0.349766 10.7812 0.78125 10.7812H9.21875V19.2188C9.21875 19.6502 9.56852 20 10 20C10.4315 20 10.7812 19.6502 10.7812 19.2188V10.7812H19.2188C19.6502 10.7812 20 10.4315 20 10C20 9.56852 19.6502 9.21875 19.2188 9.21875Z"
                                 fill="currentcolor" />
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-35 grid-item cat2 cat3">
                  <div class="it-gallery-item p-relative">
                     <div class="it-gallery-thumb">
                        <img src="{{ asset('coloringRoll/img/gallery/thumb-1-2.jpg')}}" alt="">
                     </div>
                     <div class="it-gallery-thumb-icon">
                        <a class="popup-image" href="{{ asset('coloringRoll/img/gallery/thumb-1-2.jpg')}}">
                           <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M19.2188 9.21875H10.7812V0.78125C10.7812 0.349766 10.4315 0 10 0C9.56852 0 9.21875 0.349766 9.21875 0.78125V9.21875H0.78125C0.349766 9.21875 0 9.56852 0 10C0 10.4315 0.349766 10.7812 0.78125 10.7812H9.21875V19.2188C9.21875 19.6502 9.56852 20 10 20C10.4315 20 10.7812 19.6502 10.7812 19.2188V10.7812H19.2188C19.6502 10.7812 20 10.4315 20 10C20 9.56852 19.6502 9.21875 19.2188 9.21875Z"
                                 fill="currentcolor" />
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-35 grid-item cat1">
                  <div class="it-gallery-item p-relative">
                     <div class="it-gallery-thumb">
                        <img src="{{ asset('coloringRoll/img/gallery/thumb-1-3.jpg')}}" alt="">
                     </div>
                     <div class="it-gallery-thumb-icon">
                        <a class="popup-image" href="{{ asset('coloringRoll/img/gallery/thumb-1-3.jpg')}}">
                           <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M19.2188 9.21875H10.7812V0.78125C10.7812 0.349766 10.4315 0 10 0C9.56852 0 9.21875 0.349766 9.21875 0.78125V9.21875H0.78125C0.349766 9.21875 0 9.56852 0 10C0 10.4315 0.349766 10.7812 0.78125 10.7812H9.21875V19.2188C9.21875 19.6502 9.56852 20 10 20C10.4315 20 10.7812 19.6502 10.7812 19.2188V10.7812H19.2188C19.6502 10.7812 20 10.4315 20 10C20 9.56852 19.6502 9.21875 19.2188 9.21875Z"
                                 fill="currentcolor" />
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-35 grid-item cat2">
                  <div class="it-gallery-item p-relative">
                     <div class="it-gallery-thumb">
                        <img src="{{ asset('coloringRoll/img/gallery/thumb-1-4.jpg')}}" alt="">
                     </div>
                     <div class="it-gallery-thumb-icon">
                        <a class="popup-image" href="{{ asset('coloringRoll/img/gallery/thumb-1-4.jpg')}}">
                           <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M19.2188 9.21875H10.7812V0.78125C10.7812 0.349766 10.4315 0 10 0C9.56852 0 9.21875 0.349766 9.21875 0.78125V9.21875H0.78125C0.349766 9.21875 0 9.56852 0 10C0 10.4315 0.349766 10.7812 0.78125 10.7812H9.21875V19.2188C9.21875 19.6502 9.56852 20 10 20C10.4315 20 10.7812 19.6502 10.7812 19.2188V10.7812H19.2188C19.6502 10.7812 20 10.4315 20 10C20 9.56852 19.6502 9.21875 19.2188 9.21875Z"
                                 fill="currentcolor" />
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-35 grid-item cat2 cat1 cat3">
                  <div class="it-gallery-item p-relative">
                     <div class="it-gallery-thumb">
                        <img src="{{ asset('coloringRoll/img/gallery/thumb-1-5.jpg')}}" alt="">
                     </div>
                     <div class="it-gallery-thumb-icon">
                        <a class="popup-image" href="{{ asset('coloringRoll/img/gallery/thumb-1-5.jpg')}}">
                           <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M19.2188 9.21875H10.7812V0.78125C10.7812 0.349766 10.4315 0 10 0C9.56852 0 9.21875 0.349766 9.21875 0.78125V9.21875H0.78125C0.349766 9.21875 0 9.56852 0 10C0 10.4315 0.349766 10.7812 0.78125 10.7812H9.21875V19.2188C9.21875 19.6502 9.56852 20 10 20C10.4315 20 10.7812 19.6502 10.7812 19.2188V10.7812H19.2188C19.6502 10.7812 20 10.4315 20 10C20 9.56852 19.6502 9.21875 19.2188 9.21875Z"
                                 fill="currentcolor" />
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-35 grid-item cat2 cat1">
                  <div class="it-gallery-item p-relative">
                     <div class="it-gallery-thumb">
                        <img src="{{ asset('coloringRoll/img/gallery/thumb-1-6.jpg')}}" alt="">
                     </div>
                     <div class="it-gallery-thumb-icon">
                        <a class="popup-image" href="{{ asset('coloringRoll/img/gallery/thumb-1-6.jpg')}}">
                           <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M19.2188 9.21875H10.7812V0.78125C10.7812 0.349766 10.4315 0 10 0C9.56852 0 9.21875 0.349766 9.21875 0.78125V9.21875H0.78125C0.349766 9.21875 0 9.56852 0 10C0 10.4315 0.349766 10.7812 0.78125 10.7812H9.21875V19.2188C9.21875 19.6502 9.56852 20 10 20C10.4315 20 10.7812 19.6502 10.7812 19.2188V10.7812H19.2188C19.6502 10.7812 20 10.4315 20 10C20 9.56852 19.6502 9.21875 19.2188 9.21875Z"
                                 fill="currentcolor" />
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-35 grid-item cat1 cat3 cat2">
                  <div class="it-gallery-item p-relative">
                     <div class="it-gallery-thumb">
                        <img src="{{ asset('coloringRoll/img/gallery/thumb-1-7.jpg')}}" alt="">
                     </div>
                     <div class="it-gallery-thumb-icon">
                        <a class="popup-image" href="{{ asset('coloringRoll/img/gallery/thumb-1-7.jpg')}}">
                           <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M19.2188 9.21875H10.7812V0.78125C10.7812 0.349766 10.4315 0 10 0C9.56852 0 9.21875 0.349766 9.21875 0.78125V9.21875H0.78125C0.349766 9.21875 0 9.56852 0 10C0 10.4315 0.349766 10.7812 0.78125 10.7812H9.21875V19.2188C9.21875 19.6502 9.56852 20 10 20C10.4315 20 10.7812 19.6502 10.7812 19.2188V10.7812H19.2188C19.6502 10.7812 20 10.4315 20 10C20 9.56852 19.6502 9.21875 19.2188 9.21875Z"
                                 fill="currentcolor" />
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-35 grid-item cat1 cat2">
                  <div class="it-gallery-item p-relative">
                     <div class="it-gallery-thumb">
                        <img src="{{ asset('coloringRoll/img/gallery/thumb-1-8.jpg')}}" alt="">
                     </div>
                     <div class="it-gallery-thumb-icon">
                        <a class="popup-image" href="{{ asset('coloringRoll/img/gallery/thumb-1-8.jpg')}}">
                           <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M19.2188 9.21875H10.7812V0.78125C10.7812 0.349766 10.4315 0 10 0C9.56852 0 9.21875 0.349766 9.21875 0.78125V9.21875H0.78125C0.349766 9.21875 0 9.56852 0 10C0 10.4315 0.349766 10.7812 0.78125 10.7812H9.21875V19.2188C9.21875 19.6502 9.56852 20 10 20C10.4315 20 10.7812 19.6502 10.7812 19.2188V10.7812H19.2188C19.6502 10.7812 20 10.4315 20 10C20 9.56852 19.6502 9.21875 19.2188 9.21875Z"
                                 fill="currentcolor" />
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- gallery-area-end -->

   </main>

@endsection