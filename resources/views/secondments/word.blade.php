<?php
$export_file = "my_name.doc";
ob_end_clean();
ini_set('zlib.output_compression', 'Off');
header('Pragma: public');
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");                  // Date in the past    
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');     // HTTP/1.1 
header('Cache-Control: pre-check=0, post-check=0, max-age=0');    // HTTP/1.1 
header("Pragma: no-cache");
header("Expires: 0");
header('Content-Transfer-Encoding: none');
header('Content-Type: application/vnd.ms-word;');                 // This should work for IE & Opera 
header("Content-type: application/x-msword");                    // This should work for the rest 
header('Content-Disposition: attachment; filename="' . basename($export_file) . '"');
?>
@extends('layouts.print')

@section('content')


<div class="row">

    <div class="col-10">
        <h6 class="text-center mt-3"> قرار إداري</h6>
    </div>
</div>
<br />

<table border="1">
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
<br /> <br />
<div class="text-justify" dir="rtl">

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
        {{ $datas['noOther'] }}
        وتاريخ
        {{ $datas['dateOther'] }}
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
        {{ $datas['dateSecondment'] }}
        <br />
        - وبناءً على قرار مجلس الجامعة رقم
        {{ $datas['onCouncil'] }}
        ، بموجب خطاب فضيلة المستشار أمين عام مجلس الجامعة رقم
        {{ $datas['onSecretary'] }}
        وتاريخ
        {{ $datas['dateSecretary'] }}
        ، المبني على خطاب سعادة عميد كلية
        {{ $datas['employer'] }}
        رقم
        {{ $datas['onCollege'] }}
        وتاريخ
        {{ $datas['dateCollege'] }}
        ،المتضمن توصية مجلس الكلية بالموافقة على توصية مجلس قسم
        {{ $datas['college_id'] }}

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
        {{ $datas['dateSecondment'] }}
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
        {{ $datas['dateSecondment'] }}

        <br />

        2- تتحمل
        {{$datas['other']}}

        صرف رواتبه وبدلاته المستحقة له نظاماً خلال فترة الإعارة، وفق المادة (74) من اللائحة المنظمة لشؤون منسوبي الجامعات السعوديين من أعضاء هيئة التدريس ومن في حكمهم.
        <br />
        3- على الجهات المعنية تنفيذ هذا القرار والعمل بموجبه.
    </div>

    <div class="text-left">
        <p>وكيل الجامعة </p>
        <p> د. منصور بن عبدالرحمن الحيدري</p>
    </div>

    <div class="text-right" style="font-size:10px">

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







    @endsection