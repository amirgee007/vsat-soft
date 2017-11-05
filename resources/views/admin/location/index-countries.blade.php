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
                    <h3 class="page-header"><i class="fa fa-flag"></i>Countries</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="fa fa-flag"></i>Countries</li>
                    </ol>
                </div>
            </div>

            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Countries
                        </header>
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th style="vertical-align: middle" class="text-center">S/N</th>
                                <th style="vertical-align: middle">Country Name</th>
                                <th style="vertical-align: middle" class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td class="text-left">Andorra</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="text-left">United Arab Emirates</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="text-left">Afghanistan</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="text-left">Antigua and Barbuda</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td class="text-left">Anguilla</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td class="text-left">Albania</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td class="text-left">Armenia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td class="text-left">Angola</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td class="text-left">Antarctica</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td class="text-left">Argentina</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td class="text-left">American Samoa</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td class="text-left">Austria</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td class="text-left">Australia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td class="text-left">Aruba</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td class="text-left">Åland Islands</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td class="text-left">Azerbaijan</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td class="text-left">Bosnia and Herzegovina</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td class="text-left">Barbados</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td class="text-left">Bangladesh</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td class="text-left">Belgium</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td class="text-left">Burkina Faso</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td class="text-left">Bulgaria</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td class="text-left">Bahrain</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td class="text-left">Burundi</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td class="text-left">Benin</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td class="text-left">Saint Barthélemy</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td class="text-left">Bermuda</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td class="text-left">Brunei Darussalam</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td class="text-left">Bolivia (Plurinational State of)</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td class="text-left">Bonaire, Sint Eustatius and Saba</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td class="text-left">Brazil</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td class="text-left">Bahamas</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td class="text-left">Bhutan</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td class="text-left">Botswana</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td class="text-left">Belarus</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td class="text-left">Belize</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>37</td>
                                <td class="text-left">Canada</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td class="text-left">Cocos (Keeling) Islands</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>39</td>
                                <td class="text-left">Congo (Democratic Republic of the)</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>40</td>
                                <td class="text-left">Central African Republic</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>41</td>
                                <td class="text-left">Congo (Republic of the)</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>42</td>
                                <td class="text-left">Switzerland</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>43</td>
                                <td class="text-left">Côte d'Ivoire</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td class="text-left">Cook Islands</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>45</td>
                                <td class="text-left">Chile</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>46</td>
                                <td class="text-left">Cameroon</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>47</td>
                                <td class="text-left">China</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>48</td>
                                <td class="text-left">Colombia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>49</td>
                                <td class="text-left">Costa Rica</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>50</td>
                                <td class="text-left">Cuba</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>51</td>
                                <td class="text-left">Cabo Verde</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>52</td>
                                <td class="text-left">Curaçao</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>53</td>
                                <td class="text-left">Christmas Island</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>54</td>
                                <td class="text-left">Cyprus</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>55</td>
                                <td class="text-left">Czech Republic</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>56</td>
                                <td class="text-left">Germany</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>57</td>
                                <td class="text-left">Djibouti</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>58</td>
                                <td class="text-left">Denmark</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>59</td>
                                <td class="text-left">Dominica</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>60</td>
                                <td class="text-left">Dominican Republic</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>61</td>
                                <td class="text-left">Algeria</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>62</td>
                                <td class="text-left">Ecuador</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>63</td>
                                <td class="text-left">Estonia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>64</td>
                                <td class="text-left">Egypt</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>65</td>
                                <td class="text-left">Western Sahara</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>66</td>
                                <td class="text-left">Eritrea</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>67</td>
                                <td class="text-left">Spain</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>68</td>
                                <td class="text-left">Ethiopia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>69</td>
                                <td class="text-left">Finland</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>70</td>
                                <td class="text-left">Fiji</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>71</td>
                                <td class="text-left">Falkland Islands (Malvinas)</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>72</td>
                                <td class="text-left">Micronesia (Federated States of)</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>73</td>
                                <td class="text-left">Faroe Islands</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>74</td>
                                <td class="text-left">France</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>75</td>
                                <td class="text-left">Gabon</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>76</td>
                                <td class="text-left">United Kingdom of Great Britain and Northern Ireland</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>77</td>
                                <td class="text-left">Grenada</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>78</td>
                                <td class="text-left">Georgia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>79</td>
                                <td class="text-left">French Guiana</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>80</td>
                                <td class="text-left">Guernsey</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>81</td>
                                <td class="text-left">Ghana</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>82</td>
                                <td class="text-left">Gibraltar</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>83</td>
                                <td class="text-left">Greenland</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>84</td>
                                <td class="text-left">Gambia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>85</td>
                                <td class="text-left">Guinea</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>86</td>
                                <td class="text-left">Guadeloupe</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>87</td>
                                <td class="text-left">Equatorial Guinea</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>88</td>
                                <td class="text-left">Greece</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>89</td>
                                <td class="text-left">South Georgia and the South Sandwich Islands</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>90</td>
                                <td class="text-left">Guatemala</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>91</td>
                                <td class="text-left">Guam</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>92</td>
                                <td class="text-left">Guinea-Bissau</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>93</td>
                                <td class="text-left">Guyana</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>94</td>
                                <td class="text-left">Hong Kong</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>95</td>
                                <td class="text-left">Honduras</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>96</td>
                                <td class="text-left">Croatia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>97</td>
                                <td class="text-left">Haiti</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>98</td>
                                <td class="text-left">Hungary</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>99</td>
                                <td class="text-left">Indonesia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>100</td>
                                <td class="text-left">Ireland</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>101</td>
                                <td class="text-left">Israel</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>102</td>
                                <td class="text-left">Isle of Man</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>103</td>
                                <td class="text-left">India</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>104</td>
                                <td class="text-left">Iraq</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>105</td>
                                <td class="text-left">Iran</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>106</td>
                                <td class="text-left">Iceland</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>107</td>
                                <td class="text-left">Italy</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>108</td>
                                <td class="text-left">Jersey</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>109</td>
                                <td class="text-left">Jamaica</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>110</td>
                                <td class="text-left">Jordan</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>111</td>
                                <td class="text-left">Japan</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>112</td>
                                <td class="text-left">Kenya</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>113</td>
                                <td class="text-left">Kyrgyzstan</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>114</td>
                                <td class="text-left">Cambodia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>115</td>
                                <td class="text-left">Kiribati</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>116</td>
                                <td class="text-left">Comoros</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>117</td>
                                <td class="text-left">Saint Kitts and Nevis</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>118</td>
                                <td class="text-left">Korea (Democratic People's Republic of)</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>119</td>
                                <td class="text-left">Korea (Republic of)</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>120</td>
                                <td class="text-left">Kuwait</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>121</td>
                                <td class="text-left">Cayman Islands</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>122</td>
                                <td class="text-left">Kazakhstan</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>123</td>
                                <td class="text-left">Lao People's Democratic Republic</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>124</td>
                                <td class="text-left">Lebanon</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>125</td>
                                <td class="text-left">Saint Lucia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>126</td>
                                <td class="text-left">Liechtenstein</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>127</td>
                                <td class="text-left">Sri Lanka</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>128</td>
                                <td class="text-left">Liberia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>129</td>
                                <td class="text-left">Lesotho</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>130</td>
                                <td class="text-left">Lithuania</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>131</td>
                                <td class="text-left">Luxembourg</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>132</td>
                                <td class="text-left">Latvia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>133</td>
                                <td class="text-left">Libya</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>134</td>
                                <td class="text-left">Morocco</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>135</td>
                                <td class="text-left">Monaco</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>136</td>
                                <td class="text-left">Moldova (Republic of)</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>137</td>
                                <td class="text-left">Montenegro</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>138</td>
                                <td class="text-left">Saint Martin (French part)</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>139</td>
                                <td class="text-left">Madagascar</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>140</td>
                                <td class="text-left">Marshall Islands</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>141</td>
                                <td class="text-left">Macedonia (the former Yugoslav Republic of)</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>142</td>
                                <td class="text-left">Mali</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>143</td>
                                <td class="text-left">Myanmar</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>144</td>
                                <td class="text-left">Mongolia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>145</td>
                                <td class="text-left">Northern Mariana Islands</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>146</td>
                                <td class="text-left">Martinique</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>147</td>
                                <td class="text-left">Mauritania</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>148</td>
                                <td class="text-left">Montserrat</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>149</td>
                                <td class="text-left">Malta</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>150</td>
                                <td class="text-left">Mauritius</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>151</td>
                                <td class="text-left">Maldives</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>152</td>
                                <td class="text-left">Malawi</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>153</td>
                                <td class="text-left">Mexico</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>154</td>
                                <td class="text-left">Malaysia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>155</td>
                                <td class="text-left">Mozambique</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>156</td>
                                <td class="text-left">Namibia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>157</td>
                                <td class="text-left">New Caledonia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>158</td>
                                <td class="text-left">Niger</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>159</td>
                                <td class="text-left">Nigeria</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>160</td>
                                <td class="text-left">Nicaragua</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>161</td>
                                <td class="text-left">Netherlands</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>162</td>
                                <td class="text-left">Norway</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>163</td>
                                <td class="text-left">Nepal</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>164</td>
                                <td class="text-left">Nauru</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>165</td>
                                <td class="text-left">Niue</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>166</td>
                                <td class="text-left">New Zealand</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>167</td>
                                <td class="text-left">Oman</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>168</td>
                                <td class="text-left">Panama</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>169</td>
                                <td class="text-left">Peru</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>170</td>
                                <td class="text-left">French Polynesia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>171</td>
                                <td class="text-left">Papua New Guinea</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>172</td>
                                <td class="text-left">Philippines</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>173</td>
                                <td class="text-left">Pakistan</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>174</td>
                                <td class="text-left">Poland</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>175</td>
                                <td class="text-left">Saint Pierre and Miquelon</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>176</td>
                                <td class="text-left">Pitcairn</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>177</td>
                                <td class="text-left">Puerto Rico</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>178</td>
                                <td class="text-left">Palestine, State of</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>179</td>
                                <td class="text-left">Portugal</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>180</td>
                                <td class="text-left">Palau</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>181</td>
                                <td class="text-left">Paraguay</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>182</td>
                                <td class="text-left">Qatar</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>183</td>
                                <td class="text-left">Réunion</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>184</td>
                                <td class="text-left">Romania</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>185</td>
                                <td class="text-left">Serbia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>186</td>
                                <td class="text-left">Russian Federation</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>187</td>
                                <td class="text-left">Rwanda</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>188</td>
                                <td class="text-left">Saudi Arabia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>189</td>
                                <td class="text-left">Solomon Islands</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>190</td>
                                <td class="text-left">Seychelles</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>191</td>
                                <td class="text-left">Sudan</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>192</td>
                                <td class="text-left">Sweden</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>193</td>
                                <td class="text-left">Singapore</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>194</td>
                                <td class="text-left">Saint Helena, Ascension and Tristan da Cunha</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>195</td>
                                <td class="text-left">Slovenia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>196</td>
                                <td class="text-left">Svalbard and Jan Mayen</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>197</td>
                                <td class="text-left">Slovakia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>198</td>
                                <td class="text-left">Sierra Leone</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>199</td>
                                <td class="text-left">San Marino</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>200</td>
                                <td class="text-left">Senegal</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>201</td>
                                <td class="text-left">Somalia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>202</td>
                                <td class="text-left">Suriname</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>203</td>
                                <td class="text-left">South Sudan</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>204</td>
                                <td class="text-left">Sao Tome and Principe</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>205</td>
                                <td class="text-left">El Salvador</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>206</td>
                                <td class="text-left">Sint Maarten (Dutch part)</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>207</td>
                                <td class="text-left">Syrian Arab Republic</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>208</td>
                                <td class="text-left">Swaziland</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>209</td>
                                <td class="text-left">Turks and Caicos Islands</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>210</td>
                                <td class="text-left">Chad</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>211</td>
                                <td class="text-left">French Southern Territories</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>212</td>
                                <td class="text-left">Togo</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>213</td>
                                <td class="text-left">Thailand</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>214</td>
                                <td class="text-left">Tajikistan</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>215</td>
                                <td class="text-left">Tokelau</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>216</td>
                                <td class="text-left">Timor-Leste</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>217</td>
                                <td class="text-left">Turkmenistan</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>218</td>
                                <td class="text-left">Tunisia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>219</td>
                                <td class="text-left">Tonga</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>220</td>
                                <td class="text-left">Turkey</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>221</td>
                                <td class="text-left">Trinidad and Tobago</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>222</td>
                                <td class="text-left">Tuvalu</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>223</td>
                                <td class="text-left">Taiwan, Province of China</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>224</td>
                                <td class="text-left">Tanzania, United Republic of</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>225</td>
                                <td class="text-left">Ukraine</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>226</td>
                                <td class="text-left">Uganda</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>227</td>
                                <td class="text-left">United States of America</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>228</td>
                                <td class="text-left">Uruguay</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>229</td>
                                <td class="text-left">Uzbekistan</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>230</td>
                                <td class="text-left">Vatican City State</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>231</td>
                                <td class="text-left">Saint Vincent and the Grenadines</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>232</td>
                                <td class="text-left">Venezuela (Bolivarian Republic of)</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>233</td>
                                <td class="text-left">Virgin Islands (British)</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>234</td>
                                <td class="text-left">Virgin Islands (U.S.)</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>235</td>
                                <td class="text-left">Vietnam</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>236</td>
                                <td class="text-left">Vanuatu</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>237</td>
                                <td class="text-left">Wallis and Futuna</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>238</td>
                                <td class="text-left">Samoa</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>239</td>
                                <td class="text-left">Yemen</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>240</td>
                                <td class="text-left">Mayotte</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>241</td>
                                <td class="text-left">South Africa</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>242</td>
                                <td class="text-left">Zambia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>243</td>
                                <td class="text-left">Zimbabwe</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>

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

    <script>

        $(function () {

            //all jquery code here
        });

    </script>
@stop
