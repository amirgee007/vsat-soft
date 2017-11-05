@extends('admin/layouts/default')

@section('pageTitle', 'sample page')

@section('header_styles')
    {{--<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css"/>--}}
@stop

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="icon_building"></i>Cities</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="icon_building"></i>Cities</li>
                    </ol>
                </div>
            </div>

            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <div class="form-group">
                            <input type="text" class="search form-control" placeholder="What you looking for?">
                        </div>
                    </div>
                    <section class="panel">

                        <header class="panel-heading">
                            Cities
                        </header>
                        <span class="counter pull-right"></span>
                        <table class="table table-striped table-hover results">
                            <thead>
                            <tr>
                                <th style="vertical-align: middle" class="text-center">S/N</th>
                                <th style="vertical-align: middle">Country Name</th>
                                <th style="vertical-align: middle">City Name</th>
                                <th style="vertical-align: middle" class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr><td>1</td><td class="text-left">Andorra</td><td class="text-left">les Escaldes</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>2</td><td class="text-left">Andorra</td><td class="text-left">Andorra la Vella</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>3</td><td class="text-left">United Arab Emirates</td><td class="text-left">Umm al Qaywayn</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>4</td><td class="text-left">United Arab Emirates</td><td class="text-left">Ras al-Khaimah</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>5</td><td class="text-left">United Arab Emirates</td><td class="text-left">Khawr Fakkān</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>6</td><td class="text-left">United Arab Emirates</td><td class="text-left">Dubai</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>7</td><td class="text-left">United Arab Emirates</td><td class="text-left">Dibba Al-Fujairah</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>8</td><td class="text-left">United Arab Emirates</td><td class="text-left">Dibba Al-Hisn</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>9</td><td class="text-left">United Arab Emirates</td><td class="text-left">Sharjah</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>10</td><td class="text-left">United Arab Emirates</td><td class="text-left">Ar Ruways</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>11</td><td class="text-left">United Arab Emirates</td><td class="text-left">Al Fujayrah</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>12</td><td class="text-left">United Arab Emirates</td><td class="text-left">Al Ain</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>13</td><td class="text-left">United Arab Emirates</td><td class="text-left">Ajman</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>14</td><td class="text-left">United Arab Emirates</td><td class="text-left">Adh Dhayd</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>15</td><td class="text-left">United Arab Emirates</td><td class="text-left">Abu Dhabi</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>16</td><td class="text-left">Afghanistan</td><td class="text-left">Zaranj</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>17</td><td class="text-left">Afghanistan</td><td class="text-left">Taloqan</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>18</td><td class="text-left">Afghanistan</td><td class="text-left">Shīnḏanḏ</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>19</td><td class="text-left">Afghanistan</td><td class="text-left">Shibirghān</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>20</td><td class="text-left">Afghanistan</td><td class="text-left">Shahrak</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>21</td><td class="text-left">Afghanistan</td><td class="text-left">Sar-e Pul</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>22</td><td class="text-left">Afghanistan</td><td class="text-left">Sang-e Chārak</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>23</td><td class="text-left">Afghanistan</td><td class="text-left">Aībak</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>24</td><td class="text-left">Afghanistan</td><td class="text-left">Rustāq</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>25</td><td class="text-left">Afghanistan</td><td class="text-left">Qarqīn</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>26</td><td class="text-left">Afghanistan</td><td class="text-left">Qarāwul</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>27</td><td class="text-left">Afghanistan</td><td class="text-left">Pul-e Khumrī</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>28</td><td class="text-left">Afghanistan</td><td class="text-left">Paghmān</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>29</td><td class="text-left">Afghanistan</td><td class="text-left">Nahrīn</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>30</td><td class="text-left">Afghanistan</td><td class="text-left">Maymana</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>31</td><td class="text-left">Afghanistan</td><td class="text-left">Mehtar Lām</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>32</td><td class="text-left">Afghanistan</td><td class="text-left">Mazār-e Sharīf</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>33</td><td class="text-left">Afghanistan</td><td class="text-left">Lashkar Gāh</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>34</td><td class="text-left">Afghanistan</td><td class="text-left">Kushk</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>35</td><td class="text-left">Afghanistan</td><td class="text-left">Kunduz</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>36</td><td class="text-left">Afghanistan</td><td class="text-left">Khōst</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>37</td><td class="text-left">Afghanistan</td><td class="text-left">Khulm</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>38</td><td class="text-left">Afghanistan</td><td class="text-left">Khāsh</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>39</td><td class="text-left">Afghanistan</td><td class="text-left">Khanabad</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>40</td><td class="text-left">Afghanistan</td><td class="text-left">Karukh</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>41</td><td class="text-left">Afghanistan</td><td class="text-left">Kandahār</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>42</td><td class="text-left">Afghanistan</td><td class="text-left">Kabul</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>43</td><td class="text-left">Afghanistan</td><td class="text-left">Jalālābād</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>44</td><td class="text-left">Afghanistan</td><td class="text-left">Jabal os Saraj</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>45</td><td class="text-left">Afghanistan</td><td class="text-left">Herāt</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>46</td><td class="text-left">Afghanistan</td><td class="text-left">Ghormach</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>47</td><td class="text-left">Afghanistan</td><td class="text-left">Ghazni</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>48</td><td class="text-left">Afghanistan</td><td class="text-left">Gereshk</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>49</td><td class="text-left">Afghanistan</td><td class="text-left">Gardēz</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>50</td><td class="text-left">Afghanistan</td><td class="text-left">Fayzabad</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>51</td><td class="text-left">Afghanistan</td><td class="text-left">Farah</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>52</td><td class="text-left">Afghanistan</td><td class="text-left">Kafir Qala</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>53</td><td class="text-left">Afghanistan</td><td class="text-left">Charikar</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>54</td><td class="text-left">Afghanistan</td><td class="text-left">Barakī Barak</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>55</td><td class="text-left">Afghanistan</td><td class="text-left">Bāmyān</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>56</td><td class="text-left">Afghanistan</td><td class="text-left">Balkh</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>57</td><td class="text-left">Afghanistan</td><td class="text-left">Baghlān</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>58</td><td class="text-left">Afghanistan</td><td class="text-left">Ārt Khwājah</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>59</td><td class="text-left">Afghanistan</td><td class="text-left">Āsmār</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>60</td><td class="text-left">Afghanistan</td><td class="text-left">Asadābād</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>61</td><td class="text-left">Afghanistan</td><td class="text-left">Andkhōy</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>62</td><td class="text-left">Afghanistan</td><td class="text-left">Bāzārak</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>63</td><td class="text-left">Afghanistan</td><td class="text-left">Markaz-e Woluswalī-ye Āchīn</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>64</td><td class="text-left">Antigua and Barbuda</td><td class="text-left">Saint John’s</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>65</td><td class="text-left">Anguilla</td><td class="text-left">The Valley</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>66</td><td class="text-left">Albania</td><td class="text-left">Sarandë</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>67</td><td class="text-left">Albania</td><td class="text-left">Kukës</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>68</td><td class="text-left">Albania</td><td class="text-left">Korçë</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>69</td><td class="text-left">Albania</td><td class="text-left">Gjirokastër</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>70</td><td class="text-left">Albania</td><td class="text-left">Elbasan</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>71</td><td class="text-left">Albania</td><td class="text-left">Burrel</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>72</td><td class="text-left">Albania</td><td class="text-left">Vlorë</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>73</td><td class="text-left">Albania</td><td class="text-left">Tirana</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>74</td><td class="text-left">Albania</td><td class="text-left">Shkodër</td><td><input type="checkbox" class="" /></td></tr>
                            <tr><td>75</td><td class="text-left">Albania</td><td class="text-left">Patos Fshat</td><td><input type="checkbox" class="" /></td></tr>
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>

            <!-- page end-->
        </section>
    </section>
    <!--main content end-->

                            @stop

@section('footer_scripts')

    {{--<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}"></script>--}}

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery knob -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>

    <script>

        $(function () {

            //knob
            $(".knob").knob();

            $(document).ready(function() {
                $(".search").keyup(function () {
                    var searchTerm = $(".search").val();
                    var listItem = $('.results tbody').children('tr');
                    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

                    $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
                        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
                    }
                    });

                    $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
                        $(this).attr('visible','false');
                    });

                    $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
                        $(this).attr('visible','true');
                    });

                    var jobCount = $('.results tbody tr[visible="true"]').length;
                    $('.counter').text(jobCount + ' item');

                    if(jobCount == '0') {$('.no-result').show();}
                    else {$('.no-result').hide();}
                });
            });

    });

    </script>
@stop
