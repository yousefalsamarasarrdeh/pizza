@extends('layouts.Website.mainlayoutwebsite')
@section('title')
  Franchise
@endsection
@section('content')

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif





        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


      <div style="@if(  app()->getLocale()=="ar" ) direction: rtl" @endif" >
        <section id="contact" class="contact" style="background: #F9F9F9; ">
        <div class="container" data-aos="fade-up">
            <h1 class="myfont-4">Franchise</h1>
            <p class="myfont-10">Let's Pizza is proud to introduce our franchising system, offering thorough assistance, support, and guidance to our franchise partners.
                Our commitment is to ensure their success through a systematic and step-by-step approach. Our relentless pursuit of improvement is fueled by the goal to enhance customer satisfaction, elevate the overall experience, and extend the reach of the Let's Pizza brand, both within the Kingdom of Saudi Arabia and beyond its borders.
                For additional details on the Let's Pizza franchising opportunity, feel free to reach out to us at info@letspizza.sa or call 00966-532369487</p>

            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <span class="myfont-8">The Opportunity</span>
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body myfont-10" >Certainly, as we dedicate substantial time and resources to train and equip potential franchisees for successful ownership, we actively seek qualified candidates for single-unit and multi-unit franchise opportunities within the brand.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <span class="myfont-8">Grantee's rights</span>
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body myfont-10" >Certainly, as we dedicate substantial time and resources to train and equip potential franchisees for successful ownership, we actively seek qualified candidates for single-unit and multi-unit franchise opportunities within the brand.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            <span class="myfont-8">Initial support</span>
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body myfont-10" >Certainly, as we dedicate substantial time and resources to train and equip potential franchisees for successful ownership, we actively seek qualified candidates for single-unit and multi-unit franchise opportunities within the brand.</div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFor" aria-expanded="false" aria-controls="flush-collapseFor">
                             <span class="myfont-8">Training</span>
                        </button>
                    </h2>
                    <div id="flush-collapseFor" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body myfont-10" >Certainly, as we dedicate substantial time and resources to train and equip potential franchisees for successful ownership, we actively seek qualified candidates for single-unit and multi-unit franchise opportunities within the brand.</div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFor1" aria-expanded="false" aria-controls="flush-collapseFor1">
                             <span class="myfont-8">Partners in Success</span>
                        </button>
                    </h2>
                    <div id="flush-collapseFor1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body myfont-10" >- Regular branch visits for performance monitoring, reviews, and continual support.
                            <br>
                            -Periodic assessment of financial and operational metrics, sales analysis, formulation of improvement plans, and evaluation of the business strategy.
                            <br>
                            -In–depth market study and analysis, performance development, and review and enhancement of marketing strategies.
                            <br>
                            -Innovation in product development and the selection of new raw materials.  </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFor2" aria-expanded="false" aria-controls="flush-collapseFor2">
                            <span class="myfont-8">Grantee requirements</span>
                        </button>
                    </h2>
                    <div id="flush-collapseFor2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body myfont-10" >Certainly, as we dedicate substantial time and resources to train and equip potential franchisees for successful ownership, we actively seek qualified candidates for single-unit and multi-unit franchise opportunities within the brand.</div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFor3" aria-expanded="false" aria-controls="flush-collapseFor3">
                            <span class="myfont-8">Franchise fees and royalties</span>
                        </button>
                    </h2>
                    <div id="flush-collapseFor3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body myfont-10" >Certainly, as we dedicate substantial time and resources to train and equip potential franchisees for successful ownership, we actively seek qualified candidates for single-unit and multi-unit franchise opportunities within the brand.</div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFor4" aria-expanded="false" aria-controls="flush-collapseFor4">
                            <span class="myfont-8">The approximate cost of establishing a branch of the Let's Pizza restaurant chain</span>
                        </button>
                    </h2>
                    <div id="flush-collapseFor4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body myfont-10" >Certainly, as we dedicate substantial time and resources to train and equip potential franchisees for successful ownership, we actively seek qualified candidates for single-unit and multi-unit franchise opportunities within the brand.</div>
                    </div>
                </div>
            </div>
        </div>
        </section>


      </div>
@endsection
