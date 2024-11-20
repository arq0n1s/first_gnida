<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $page_title ?></title>
</head>
<body>
    <div>
        <div>
            <ul>
                <il><a href="{{route('main.index')}}">Main</a></il>
                <il><a href="{{route('post.index')}}">Posts</a></il>
                <il><a href="{{route('moto.index')}}">Moto</a></il>
                <il><a href="{{route('about.index')}}">About</a></il>
                <il><a href="{{route('contact.index')}}">Contacts</a></il>
            </ul>
        </div>
        @yield('description')
    </div>
</body>
</html>