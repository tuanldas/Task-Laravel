<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon"
          href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico"/>
    <link rel="mask-icon" type=""
          href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg"
          color="#111"/>
    <link type="text/css" rel="stylesheet" href="{{asset('/css/taskManagement.css')}}">
    <title>CodePen - Pure CSS Table Highlight (vertical &amp; horizontal)</title>


    <script>
        window.console = window.console || function (t) {
        };
    </script>


    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>


</head>

<body translate="no">

<div class="container">
    <table>
        <thead>
        <tr>

            <th>STT</th>

            <th>Họ và tên</th>

            <th>Số điện thoại</th>

            <th>Email</th>

            <th>Thao tác</th>

        </tr>
        </thead>
        <tbody>
        @foreach($lists as $list)
            <tr>

                <td>{{ $list->id }}</td>

                <td>{{ $list->name }}</td>

                <td>{{ $list->phone }}</td>

                <td>{{ $list->email }}</td>

                <td>

                   <a href="{{ route('update', $list->id ) }}">Sửa</a> | <a href="{{ route('delete', $list->id) }}">Xóa</a>

                </td>

            </tr>
        @endforeach
        </tbody>

        <a href="{{ route('add') }}"><h1>Add</h1></a>
    </table>
</div>


</body>

</html>

