@extends('layouts.Website.mainlayoutwebsite')
@section('title')
    FAQ
@endsection
@section('content')

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div style="@if(  app()->getLocale()=="ar" ) direction: rtl" @endif" >
          <section id="contact" class="contact" style="background: #F9F9F9; ">
            <div class="container" data-aos="fade-up">

                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                <img src="{{url('Website/assets/img/Line.png')}}"> <span class="myfont-8">Is prior experience in the industry necessary to become a Let’s Pizza franchise owner?</span>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body myfont-9" >Certainly, as we dedicate substantial time and resources to train and equip potential franchisees for successful ownership, we actively seek qualified candidates for single-unit and multi-unit franchise opportunities within the brand.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                <img src="{{url('Website/assets/img/Line.png')}}"> <span class="myfont-8">Does Let’s Pizza provide options for opening both individual and multiple branches?</span>
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body myfont-9" >Certainly, as we dedicate substantial time and resources to train and equip potential franchisees for successful ownership, we actively seek qualified candidates for single-unit and multi-unit franchise opportunities within the brand.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                <img src="{{url('Website/assets/img/Line.png')}}"> <span class="myfont-8">What support and training are provided to me upon becoming a franchisee for Let’s Pizza?</span>
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body myfont-9" >Certainly, as we dedicate substantial time and resources to train and equip potential franchisees for successful ownership, we actively seek qualified candidates for single-unit and multi-unit franchise opportunities within the brand.</div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFor" aria-expanded="false" aria-controls="flush-collapseFor">
                                <img src="{{url('Website/assets/img/Line.png')}}"> <span class="myfont-8">Does Let’s Pizza provide financing options?</span>
                            </button>
                        </h2>
                        <div id="flush-collapseFor" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body myfont-9" >Certainly, as we dedicate substantial time and resources to train and equip potential franchisees for successful ownership, we actively seek qualified candidates for single-unit and multi-unit franchise opportunities within the brand.</div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFor1" aria-expanded="false" aria-controls="flush-collapseFor1">
                                <img src="{{url('Website/assets/img/Line.png')}}"> <span class="myfont-8">When can I anticipate the opening of my Let’s Pizza restaurant?</span>
                            </button>
                        </h2>
                        <div id="flush-collapseFor1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body myfont-9" >Certainly, as we dedicate substantial time and resources to train and equip potential franchisees for successful ownership, we actively seek qualified candidates for single-unit and multi-unit franchise opportunities within the brand.</div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFor2" aria-expanded="false" aria-controls="flush-collapseFor2">
                                <img src="{{url('Website/assets/img/Line.png')}}"> <span class="myfont-8">What are the typical site preferences for Let's Pizza branches?</span>
                            </button>
                        </h2>
                        <div id="flush-collapseFor2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body myfont-9" >Certainly, as we dedicate substantial time and resources to train and equip potential franchisees for successful ownership, we actively seek qualified candidates for single-unit and multi-unit franchise opportunities within the brand.</div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFor3" aria-expanded="false" aria-controls="flush-collapseFor3">
                                <img src="{{url('Website/assets/img/Line.png')}}"> <span class="myfont-8">Will I be granted exclusive rights in the designated area?</span>
                            </button>
                        </h2>
                        <div id="flush-collapseFor3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body myfont-9" >Certainly, as we dedicate substantial time and resources to train and equip potential franchisees for successful ownership, we actively seek qualified candidates for single-unit and multi-unit franchise opportunities within the brand.</div>
                        </div>
                    </div>
                </div>


            </div>
          </section>
       </div>
@endsection
