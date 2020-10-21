<html>

<head>
    <style>

    </style>
</head>

<body >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <input list="" data-list="myList">

    <datalist id="myList">
        <option value="option 1">
        </option>
        <option value="option 2">
        </option>
    </datalist>
    <script type="text/javascript">
        $('input[list]').on('input', function(e) {
            var input = $(e.target),
                datalist = input.attr('data-list');

            if (input.val().length < 3) {
                input.attr('list', '');
            } else {
                input.attr('list', datalist);
            }
        });
    </script>

</body>

</html>