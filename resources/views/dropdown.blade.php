<!DOCTYPE html>
<html>


<body>

    <span> Author: </span>
    <select class="author" style="width: 200px" onchange="showDiv('hidden_div', this)" id="author_id">
        <option value="" disabled selected>Select Author</option>
        @foreach($authors as $author)
        <option value="{{$author->id}}">{{$author->name}}</option>
        @endforeach
    </select>

    <!-- <span> <br>Book Name: </span>
    <select class=" books" style="width: 200px">
        <option value="0" disabled selected>Select Book</option>
    </select> -->


    <div id="hidden_div" hidden>
        <select class=" books" style="width: 200px">
            <option value="0" disabled selected>Select Book</option>
        </select>
    </div>

    <span>Product Price: </span>
    <input type="text" class="year">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        function showDiv(divId, element) {
            document.getElementById(divId).style.display = element.value ? 'block' : 'none';
        }
        $(document).ready(function() {
            $(document).on('change', '.author', function() {
                // console.log("it is changed");

                var auth_id = $(this).val();
                // console.log(id);
                var div = $(this).parent();

                var op = " ";

                $.ajax({
                    type: "get",
                    url: '/findbook',
                    data: {
                        'id': auth_id
                    },
                    success: function(data) {
                        //console.log('success');
                        //console.log(data);

                        op += '<option value="0" selected disabled> Select Book </option>';
                        for (var i = 0; i < data.length; i++) {
                            op += '<option value="' + data[i].id + '">' + data[i].name + '</option>';
                        }

                        div.find('.books').html("");
                        div.find('.books').append(op);

                        console.log(op);

                    },
                    error: function() {

                    }
                });
            });

            $(document).on('change', '.books', function() {
                var prod_id = $(this).val();
                var a = $(this).parent();
                console.log(prod_id);
                var op = "";
                $.ajax({
                    type: 'get',
                    url: 'findyear',
                    data: {
                        'id': prod_id
                    },
                    dataType: 'json', //return data will be json
                    success: function(data) {
                        console.log("success");
 
                        // here price is coloumn name in products table data.coln name

                        a.find('.year').val(data.price);

                    },
                    error: function() {

                    }
                });


            });

        });
    </script>



</body>

</html>