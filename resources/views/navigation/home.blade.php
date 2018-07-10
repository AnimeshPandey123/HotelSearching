 @extends('layouts.newhome')
@section('content')

 <div class="tm-section tm-bg-img" id="tm-section-1">
                <div class="tm-bg-white ie-container-width-fix-2">
                    <div class="container ie-h-align-center-fix">
                        <div class="row">
                            <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
                                <form action="{{route('hotels.search')}}" method="post" class="tm-search-form tm-section-pad-2">
                                    {{ csrf_field() }}
                                    <div class="form-row tm-search-form-row">
                                        <div style="font-family: sans-serif;">
                                          <h2><i>Search for hotels</i></h2>  
                                        </div>
                                        
                                        <br>
                                        <div class="form-group tm-form-element" style="margin-left: auto; width: 100%">
                                            <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>
                                            <input name="address" type="text" class="form-control" placeholder="Type your destination...">
                                        </div> 
                                    </div>
                                    <div class="form-row tm-search-form-row">
                                        <div class="form-group tm-form-element tm-form-element-2">                                            
                                            <select name="adult" class="form-control tm-select" id="adult">
                                                <option value="">Adult</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                            <i class="fa fa-2x fa-user tm-form-element-icon"></i>
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-2">                                            
                                            <select name="children" class="form-control tm-select" id="children">
                                                <option value="">Children</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                            <i class="fa fa-user tm-form-element-icon tm-form-element-icon-small"></i>
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-2">
                                            <select name="room" class="form-control tm-select" id="room">
                                                <option value="">Room</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                            <i class="fa fa-2x fa-bed tm-form-element-icon"></i>
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-2">
                                            <button type="submit" class="btn btn-primary tm-btn-search">Check Availability</button>
                                        </div>
                                       
                                      </div>
                                     
                                </form>
                            </div>                        
                        </div>      
                    </div>
                </div>                  
            </div>
            <div class="tm-section-2">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h2 class="tm-section-title">We are here to help you?</h2>
                            <p class="tm-color-white tm-section-subtitle">Subscribe to get our newsletters</p>
                            <a href="#" class="tm-color-white tm-btn-white-bordered">Subscribe Newletters</a>
                        </div>                
                    </div>
                </div>        
            </div>
            
            <div class="tm-section tm-position-relative">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" class="tm-section-down-arrow">
                    <polygon fill="#ee5057" points="0,0  100,0  50,60"></polygon>                   
                </svg> 
                <div class="container tm-pt-5 tm-pb-4">
                    <div class="row text-center">
                        <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-article">                            
                            <i class="fa tm-fa-6x fa-legal tm-color-primary tm-margin-b-20"></i>
                            <h3 class="tm-color-primary tm-article-title-1">Pellentesque accumsan arcu nec dolor tempus</h3>
                            <p>Pellentesque at velit ante. Duis scelerisque metus vel felis porttitor gravida. Donec at felis libero. Mauris odio tortor.</p>
                            <a href="#" class="text-uppercase tm-color-primary tm-font-semibold">Continue reading...</a>
                        </article>
                        <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-article">                            
                            <i class="fa tm-fa-6x fa-plane tm-color-primary tm-margin-b-20"></i>
                            <h3 class="tm-color-primary tm-article-title-1">Duis scelerisque metus vel felis porttitor</h3>
                            <p>Pellentesque at velit ante. Duis scelerisque metus vel felis porttitor gravida. Donec at felis libero. Mauris odio tortor.</p>
                            <a href="#" class="text-uppercase tm-color-primary tm-font-semibold">Continue reading...</a>                            
                        </article>
                        <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-article">                           
                            <i class="fa tm-fa-6x fa-life-saver tm-color-primary tm-margin-b-20"></i>
                            <h3 class="tm-color-primary tm-article-title-1">Etiam aliquam arcu at mauris consectetur</h3>
                            <p>Pellentesque at velit ante. Duis scelerisque metus vel felis porttitor gravida. Donec at felis libero. Mauris odio tortor.</p>
                            <a href="#" class="text-uppercase tm-color-primary tm-font-semibold">Continue reading...</a>                           
                        </article>
                    </div>        
                </div>
            </div>
            @stop