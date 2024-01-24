@extends('layouts.admin')

@section('title', 'Post Property')

@section('content')

    {{-- propert section start --}}

    <section class="post-property">

       <div class="property-details">
            <h3>Property Details</h3>

            <form action="{{ url('admin/property') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="box">
                    <p>property name <span>*</span></p>
                    <input type="text" class="input" name="property_name">
                </div>

            <div class="flex">
                    <div class="box">
                        <p>property price <span>*</span></p>
                        <input type="number" class="input" name="property_price">
                    </div>

                    <div class="box">
                        <p>deposit amount <span>*</span></p>
                        <input type="number" class="input" name="deposit_amount">
                    </div>
            </div>

            <div class="flex">
                    <div class="box">
                        <p>propery address <span>*</span></p>
                        <input type="text" class="input" name="property_address">
                    </div>

                    <div class="box">
                        <p>offer type <span>*</span></p>
                        <select name="offer_type" class="input" id="">
                            <option value="">--Select-</option>
                            <option value="sale">Sale</option>
                            <option value="resale">Re-sale</option>
                            <option value="rent">Rent</option>
                        </select>
                    </div>
            </div>

            <div class="flex">
                <div class="box">
                    <p>property type <span>*</span></p>
                    <select name="property_type" class="input" id="">
                        <option value="">--Select-</option>
                        <option value="flat">flat</option>
                        
                    </select>
                </div>

                <div class="box">
                    <p>property status <span>*</span></p>
                    <select name="property_status" class="input" id="">
                        <option value="">--Select-</option>
                        <option value="ready to move">ready to move</option>
                        <option value="for construction">for construction</option>
                        
                    </select>
                </div>
            </div>

            <div class="flex">
                <div class="box">
                    <p>furnished status <span>*</span></p>
                    <select name="furnished_status" class="input" id="">
                        <option value="">--Select-</option>
                        <option value="furnished">furnished</option>
                        <option value="semi-furnished">semi-furnished</option>
                        <option value="saunfurnishedle">unfurnished</option>
                        
                    </select>
                </div>

                <div class="box">
                    <p> how many BHK <span>*</span></p>
                    <select name="bhk" class="input" id="">
                        <option value="">--Select-</option>
                        <option value="1 bhk">1 BHK</option>
                        <option value="2 bhk">2 BHK</option>
                        <option value="3 bhk">3 BHK</option>
                        <option value="4 bhk">4 BHK</option>
                        <option value="5 bhk">5 BHK</option>
                        <option value="6 bhk">6 BHK</option>
                        <option value="7 bhk">7 BHK</option>
                        <option value="8 bhk">8 BHK</option>
                        <option value="9 bhk">9 BHK</option>
                        <option value="10 bhk">10 BHK</option>
                        
                    </select>
                </div>
            </div>

            <div class="flex">
                <div class="box">
                    <p>how many bedrooms <span>*</span></p>
                    <select name="bedrooms" class="input" id="">
                        <option value="">--Select-</option>
                        <option value="1 bedroom">1 bedroom</option>
                        <option value="2 bedrooms">2 bedrooms</option>
                        <option value="3 bedrooms">3 bedrooms</option>
                        <option value="4 bedrooms">4 bedrooms</option>
                        <option value="5 bedrooms">5 bedrooms</option>
                        <option value="6 bedrooms">6 bedrooms</option>
                        <option value="7 bedrooms">7 bedrooms</option>
                        <option value="8 bedrooms">8 bedrooms</option>
                        <option value="9 bedrooms">9 bedrooms</option>
                        
                    </select>
                </div>

                <div class="box">
                    <p> how many bathrooms <span>*</span></p>
                    <select name="bathrooms" class="input" id="">
                        <option value="">--Select-</option>
                        <option value="1 bathroom">1 bathroom</option>
                        <option value="2 bathrooms">2 bathrooms</option>
                        <option value="3 bathrooms">3 bathrooms</option>
                        <option value="4 bathrooms">4 bathrooms</option>
                        <option value="5 bathrooms">5 bathrooms</option>
                        <option value="6 bathrooms">6 bathrooms</option>
                        <option value="7 bathrooms">7 bathrooms</option>
                        <option value="8 bathrooms">8 bathrooms</option>
                        <option value="9 bathrooms">9 bathrooms</option>
                        <option value="10 bathrooms">10 bathrooms</option>
                        
                    </select>
                </div>
            </div>

            <div class="flex">
                <div class="box">
                    <p>how many balconies <span>*</span></p>
                    <select name="balconies" class="input" id="">
                        <option value="">--Select-</option>
                        <option value="1 balcony">1 balcony</option>
                        <option value="2 balconies">2 balconies</option>
                        <option value="3 balconies">3 balconies</option>
                        <option value="4 balconies">4 balconies</option>
                        <option value="5 balconies">5 balconies</option>
                        <option value="6 balconies">6 balconies</option>
                        <option value="7 balconies">7 balconies</option>
                        <option value="8 balconies">8 balconies</option>
                        <option value="9 balconies">9 balconies</option>
                        
                    </select>
                </div>

                <div class="box">
                    <p> carpet area (sqft.) <span>*</span></p>
                    <input type="number" class="input" name="carpet_area" placeholder="how many squarefits">
                </div>
            </div>

            <div class="flex">
                <div class="box">
                    <p>property age <span>*</span></p>
                    <input type="number" class="input" name="property_age" placeholder="how old is property">
                </div>

                <div class="box">
                    <p> total floors<span>*</span></p>
                    <input type="number" class="input" name="total_floor" placeholder="how many floors available?">
                </div>
            </div>

            <div class="flex">
                <div class="box">
                    <p>room floor <span>*</span></p>
                    <input type="number" class="input" name="room_floor" placeholder="property floor number">
                </div>

                <div class="box">
                    <p>loan <span>*</span></p>
                    <select name="loan" id="" class="input">
                        <option value="">--Select--</option>
                        <option value="available">available</option>
                        <option value="not available">not available</option>

                    </select>
                </div>
            </div>

            <div class="box">
                <p>property description <span>*</span></p>
                <textarea name="description" class="input" id="" cols="6" rows="6" placeholder="enter property description"></textarea>
            </div>

            <div class="flex">
                <div class="box">
                    <div class="check-type">
                        <input type="checkbox" class="checkbox" value="lifts" name="c_lift"> 
                        <label for="c_lift">lifts</label>
                    </div>
                    <div class="check-type">
                        <input type="checkbox" class="checkbox" value="security guard" name="c_guard">
                        <label for="c_guard">security guard</label> 
                    </div>
                    <div class="check-type">
                        <input type="checkbox" class="checkbox" value="security guard" name="c_playground">
                        <label for="c_playground">playground</label>
                    </div>
                    <div class="check-type">
                        <input type="checkbox" class="checkbox" value="security guard" name="c_garden">
                        <label for="c_garden">garden</label>
                    </div>
                    <div class="check-type">
                        <input type="checkbox" class="checkbox" value="security guard" name="c_watersupply">
                        <label for="c_watersupply">water supply</label>
                    </div>
                    <div class="check-type">
                        <input type="checkbox" class="checkbox" value="security guard" name="c_power">
                        <label for="c_power">power backup</label>
                    </div>
                </div>

                <div class="box">
                    <div class="check-type">
                        <input type="checkbox" class="checkbox" value="lifts" name="c_parking"> 
                        <label for="c_parking">parking area</label>
                    </div>
                    <div class="check-type">
                        <input type="checkbox" class="checkbox" value="security guard" name="c_gym">
                        <label for="c_gym">gym</label> 
                    </div>
                    <div class="check-type">
                        <input type="checkbox" class="checkbox" value="security guard" name="c_shopping">
                        <label for="c_shopping">shopping mall</label>
                    </div>
                    <div class="check-type">
                        <input type="checkbox" class="checkbox" value="security guard" name="c_hospital">
                        <label for="c_hospital">hospital</label>
                    </div>
                    <div class="check-type">
                        <input type="checkbox" class="checkbox" value="security guard" name="c_school">
                        <label for="c_school">school</label>
                    </div>
                    <div class="check-type">
                        <input type="checkbox" class="checkbox" value="security guard" name="c_market">
                        <label for="c_market">market area</label>
                    </div>
                </div>
            </div>

            <div class="box">
                <p>image 01 <span>*</span></p>
                <input type="file" name="image_1" class="input">
            </div>

            <div class="flex">
                <div class="box">
                    <p>image 02 </p>
                    <input type="file" name="image_2" class="input">
                </div>
                <div class="box">
                    <p>image 03 </p>
                    <input type="file" name="image_3" class="input">
                </div>
            </div>
            <div class="flex">
                <div class="box">
                    <p>image 04 </p>
                    <input type="file" name="image_4" class="input">
                </div>
                <div class="box">
                    <p>image 05 </p>
                    <input type="file" name="image_5" class="input">
                </div>
            </div>

            <div class="buttons">
                <button type="submit" class="btn" name="submit">Post Property</button>
            </div>
                
            



            </form>
       </div>

    </section>

    {{-- propert section end --}}

@endsection