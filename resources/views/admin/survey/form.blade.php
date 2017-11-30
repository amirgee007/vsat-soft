{{ csrf_field() }}
<div class="panel panel-primary form-group">
    <section class="panel">
        <div class="panel-content" style="clear: both;">
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Survey Name</label>
                <div class="col-sm-10 col-xs-9">
                    <input type="text" name="survey_name" value="" class="form-control" placeholder="Survey Name">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Survey Type</label>
                <div class="col-sm-10 col-xs-9">
                    <select class="form-control" name="survey_type">
                        <option selected hidden>Select Survey</option>
                        <option value="p">Performance Survey</option>
                        <option value="s">Site Survey</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Survey Description</label>
                <div class="col-sm-10 col-xs-9">
                    <textarea name="survey_des" class="form-control" id="" cols="20" rows="10"></textarea>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="form-group">
    <section class="panel">
        <header class="panel-heading">
            Add Questions/Answers To This Survey
            <div class="btn-group pull-right">
                <a class="btn btn-default" id="add-question" href="javascript:void(0);"><i class="fa fa-plus-square"></i>
                </a>
            </div>
        </header>
        <div id="question_panel">
        <div class="panel-body">
            <label class="col-lg-2 col-xs-3 control-label">Question</label>
            <div class="col-sm-10 col-xs-9">
                <input type="text" name="question_name[0]" placeholder="Type Your Question Here !" class="form-control">
                <br />
            </div>
            <label class="col-lg-2 col-xs-3 control-label">Options</label>
            <div class="col-sm-10 col-xs-9">
                <table class="table table-bordered table-hover survey-answers-table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>
                            Possible answers
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr style="cursor: initial;">
                        <td >1</td>
                        <td ><input type="text"  name="questions_options[0][]" value="" class="form-control">
                        </td>
                    </tr>
                    <tr style="cursor: initial;">
                        <td >2</td>
                        <td ><input type="text" name="questions_options[0][]"  class="form-control">
                        </td>
                    </tr>
                    <tr style="cursor: initial;">
                        <td >3</td>
                        <td ><input type="text"  name="questions_options[0][]"  class="form-control">
                        </td>
                    </tr>
                    <tr style="cursor: initial;">
                        <td >4</td>
                        <td ><input type="text"  name="questions_options[0][]"  class="form-control">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <label class="col-lg-2 col-xs-3 control-label">Select Correct Answer</label>
            <div class="col-sm-10 col-xs-9">
                <select name="correct_answer[0]" id="" class="form-control">
                    <option value="0">1st Answer Is Correct</option>
                    <option value="1">2nd Answer Is Correct</option>
                    <option value="3">3rd Answer Is Correct</option>
                    <option value="4">4th Answer Is Correct</option>
                </select>
            </div>
        </div>
        </div>
    </section>
</div>
@section('footer_scripts')
    <script>
        $(function () {
            var addQuestion = $('#add-question'); //Add button selector
            var wrapper = $('#question_panel'); //Input field wrapper
            var question = 1;
            var html = '';
            addQuestion.on('click', function (e) {
                html = '<div class="panel-body">'
                    +'<a class="btn btn-danger pull-right removeQuestion" href="javascript:void(0)"><i class="fa fa-minus-square"></i></a><hr><div class=clearfix></div>'
                    +'<label class="col-lg-2 col-xs-3 control-label">Question</label>'
                    +'<div class="col-sm-10 col-xs-9">'
                    +'<input type="text" name=question_name['+question+'] placeholder="Type Your Question Here !" class="form-control">'
                    +'<br /> </div>'
            +'<label class="col-lg-2 col-xs-3 control-label">Options</label>'
            +'<div class="col-sm-10 col-xs-9">'
                +'<table class="table table-bordered table-hover survey-answers-table">'
                     +'<thead>'
                     +'<tr> <th>#</th>'
                     +'<th>Possible answers</th>'
                     +'</tr>  </thead> <tbody>'
                     +'<tr style="cursor: initial;">'
                     +'<td >1</td><td ><input type="text"  name=questions_options['+question+'][]  class="form-control"></td>'
                     +'</tr>'
                     +'<tr style="cursor: initial;">'
                     +'<td >2</td><td ><input type="text"  name=questions_options['+question+'][]  class="form-control"></td>'
                     +'</tr>'
                     +'<tr style="cursor: initial;">'
                     +'<td >3</td><td ><input type="text"  name=questions_options['+question+'][]  class="form-control"></td>'
                     +'</tr>'
                     +'<tr style="cursor: initial;">'
                     +'<td >4</td><td ><input type=text  name=questions_options['+question+'][]  class=form-control></td>'
                     +'</tr></tbody></table>'
            +'</div>'
            +'<label class="col-lg-2 col-xs-3 control-label">Select Correct Answer</label>'
            +'<div class="col-sm-10 col-xs-9">'
               +'<select name=correct_answer['+question+'] id="" class="form-control">'
                 +'<option value="0">1st Answer Is Correct</option>'
                 +'<option value="1">2nd Answer Is Correct</option>'
                 +'<option value="2">3rd Answer Is Correct</option>'
                 +'<option value="3">4th Answer Is Correct</option>'
                +'</select></div></div>';
                wrapper.append(html);
                question++;
            });
            $(wrapper).on('click', '.removeQuestion', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                question--; //Decrement field counter
            })
        });
    </script>
@stop
