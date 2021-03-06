@extends('layouts.app')

@section('content')

<div class="container-fluid text-justify border p-3">
    @if ($datas['ok'] == 1)
    <form action="{{route('secondment.index') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-2 ">

                <button class="btn btn-success mt-3">
                    حفظ
                </button>

            </div>
            <div class="col-10">
                <h6 class="text-center mt-3">قرار إداري</h6>
            </div>
        </div>
        <br />

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">الاسم</th>
                    <th scope="col">الهوية الوطنية</th>
                    <th scope="col">مسمى الوظيفة</th>
                    <th scope="col">الكلية</th>
                    <th scope="col">جهة الاعارة</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $datas['name'] }}</td>
                    <td>{{ $datas['idNat'] }}</td>
                    <td>{{ $datas['jobTitle'] }}</td>
                    <td>{{ $datas['employer'] }}</td>
                    <td>{{ $datas['other'] }}</td>
                </tr>
            </tbody>

        </table>
        <span>
            إن وكيل جامعة الإمام محمد بن سعود الإسلامية.
            <br />
            - بناءً على الصلاحيات الممنوحة له نظاماً.
            <br />
        </span>
        <div class="form-group mx-sm-3 mb-2">
            - وبناءً على خطاب
            معالي رئيس {{ $datas['other'] }}
            رقم
            <input type="text" class="" name="noOther" placeholder="">
            وتاريخ
            <input type="text" class="" name="dateOther" placeholder="">
            ، المتضمن حاجة الجامعة
            @if ( $datas['secondment'] == 1 ) تجديد اعارة
            @else
            اعارة
            @endif
            {{ $datas['name'] }}
            لمدة
            @if ( $datas['year'] == 1 ) عام
            @else
            عامين
            @endif
            اعتباراً من تاريخ
            <input type="text" class="mt-2" name="dateSecondment" placeholder="">
            <br />
            - وبناءً على قرار مجلس الجامعة رقم
            <input type="text" class="mt-3" name="onCouncil" placeholder="">
            ، بموجب خطاب فضيلة المستشار أمين عام مجلس الجامعة رقم
            <input type="text" class="mt-2" name="onSecretary" placeholder="">
            وتاريخ
            <input type="text" class="" name="dateSecretary" placeholder="">
            ، المبني على خطاب سعادة عميد كلية
            {{ $datas['employer'] }}
            رقم
            <input type="text" class="" name="onCollege" placeholder="بدون">
            وتاريخ
            <input type="text" class="mt-3" name="dateCollege" placeholder="بدون">
            ،المتضمن توصية مجلس الكلية بالموافقة على توصية مجلس قسم
            <input type="text" class="mt-3" name="college_id" placeholder="">

            على
            @if ( $datas['secondment'] == 1 ) تجديد اعارة
            @else
            اعارة
            @endif
            الدكتور الموضح اسمه وبياناته أعلاه، للعمل في
            {{ $datas['other'] }}
            لمدة
            @if ( $datas['year'] == 1 ) عام
            @else
            عامين
            @endif
            اعتباراً من
            <input type="text" class="mt-3" name="dateSec1" id="dateSec1" placeholder="">
            <br />
            - واستناداً للمواد (75،74،73،72،71،70) من اللائحة المنظمة لشؤون منسوبي الجامعات السعوديين من أعضاء هيئة التدريس ومن في حكمهم.
            <br />
            - وعملاً بمقتضى النظام.
            <h6 class="text-center"> يقرر ما يلي: </h6>
            1-
            @if ( $datas['secondment'] == 1 ) تجديد اعارة
            @else
            اعارة
            @endif
            {{$datas['name']}}
            ، للعمل في

            {{$datas['other']}}

            ، لمدة

            @if ( $datas['year'] == 1 ) عام
            @else
            عامين
            @endif
            اعتباراً من تاريخ
            <input type="text" class="mt-3" name="dateSec2" id="dateSec2" placeholder="">

            <br />

            2- تتحمل
            {{$datas['other']}}

            صرف رواتبه وبدلاته المستحقة له نظاماً خلال فترة الإعارة، وفق المادة (74) من اللائحة المنظمة لشؤون منسوبي الجامعات السعوديين من أعضاء هيئة التدريس ومن في حكمهم.
            <br />
            3- على الجهات المعنية تنفيذ هذا القرار والعمل بموجبه.

            <div class="text-left">
                <p>وكيل الجامعة </p>
                <p> د. منصور بن عبدالرحمن الحيدري</p>
            </div>


            - الأصل للملفات مع الأساس
            (ملف الموظف). <br />
            - صورة مع التحية لكلٍ من: <br />
            - مكتبنا. <br />
            - المستشار أمين عام مجلس الجامعة. <br />
            - عميد الموارد البشرية. <br />
            - عميد كلية
            {{$datas['employer']}}. <br />
            - عميد الموارد البشرية
            بـ{{$datas['other']}} . <br />
            - مدير عام الإدارة العامة للميزانية. <br />
            - الرواتب والنفقات - التوظيف - السجلات – إدارة المراجعة الداخلية- قسم التدقيق الداخلي. <br />

        </div>
        <input type="hidden" class="mt-3" value=" {{$datas['idEmp']}}" name="idEmp">
        <input type="hidden" class="mt-3" value=" {{$datas['otherid']}}" name="employerOther_id">
        <input type="hidden" class="mt-3" value=" {{$datas['secondment']}}" name="typeSecondment">
        <input type="hidden" class="mt-3" value=" {{$datas['year']}}" name="year">
    </form>

    @else
    <div class="text-center">
        رقم الموظف غير صحيح
    </div>
    @endif
</div>

<script>
    $(document).ready(function() {
        $("#dateSecondment").keyup(function() {
            $("#dateSec1").val($("#dateSecondment").val());
            $("#dateSec2").val($("#dateSecondment").val());

        });

    });
</script>

@endsection