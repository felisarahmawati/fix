@php
    use App\Models\Companies;
    use App\Models\CompanyPic;
    use App\Models\Projects;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @foreach ($data_company_pic as $item)
        @php
            $company = Companies::where("id", $item->picable_id)->get();
        @endphp

        @if ($company->count() == 0)
        Tidak Ada
        @else
            @foreach ($company as $item)
                @php
                    $pic = CompanyPic::where("picable_id", $item->id)->get();
                @endphp

                @if ($pic->count() == 0)
                    Ada
                @else
                    @php
                        $project = Projects::where("company_id", $item->id)->get();
                    @endphp

                    @if ($project->count() == 0)
                        Ada
                    @else
                        @foreach ($project as $p)
                            @php
                                $pic_companyy = CompanyPic::where("picable_id", $p->id)->get();
                            @endphp

                            @foreach ($pic_companyy as $i)
                                {{ $i->picable_type }}
                                <br>
                            @endforeach

                        @endforeach
                    @endif

                @endif

            @endforeach
        @endif

    @endforeach

    <a href="{{ url('/logout') }}">
        Logout
    </a>

</body>
</html>
