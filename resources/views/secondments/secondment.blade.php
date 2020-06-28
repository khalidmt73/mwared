@extends('layouts.app')

@section('content')

<div class="container-fluid text-justify border p-3">
    <h6 class="text-center">قرار إداري</h6>
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
    </table>
    <span>
        إن وكيل جامعة الإمام محمد بن سعود الإسلامية.
        <br />
        - بناءً على الصلاحيات الممنوحة له نظاماً.
        <br />
    </span>
    <div class="form-group mx-sm-3 mb-2">
        - وبناءً على خطاب
        <input type="text" class="" value=" " id="noq" placeholder="">
        رقم
        <input type="text" class="" id="noq" placeholder="">
        وتاريخ
        <input type="text" class="" id="noq" placeholder="">
        ، المتضمن حاجة الجامعة
        <input type="text" class="mt-3" id="noq" placeholder="">
        الدكتور/ هشام بن محمد سعد البراك
        لمدة
        <input type="text" class="" id="noq" placeholder="">
        اعتباراً من تاريخ
        <input type="text" class="" id="noq" placeholder="">
        <br />
        - وبناءً على قرار مجلس الجامعة رقم
        <input type="text" class="mt-3" id="noq" placeholder="">
        ، بموجب خطاب فضيلة المستشار أمين عام مجلس الجامعة رقم
        <input type="text" class="" id="noq" placeholder="">
        وتاريخ
        <input type="text" class="" id="noq" placeholder="">
        ، المبني على خطاب سعادة عميد
        <input type="text" class="" id="noq" placeholder="">
        رقم
        <input type="text" class="" id="noq" placeholder="بدون">
        وتاريخ
        <input type="text" class="mt-3" id="noq" placeholder="بدون">
        ،المتضمن توصية مجلس الكلية بالموافقة على توصية مجلس قسم
        <input type="text" class="mt-3" id="noq" placeholder="">
        على تجديد إعارة
        الدكتور الموضح اسمه وبياناته أعلاه، للعمل في
        <input type="text" class="mt-3" id="noq" placeholder="">
        لمدة عام اعتباراً من
        <input type="text" class="mt-3" id="noq" placeholder="">
        <br />
        - واستناداً للمواد (75،74،73،72،71،70) من اللائحة المنظمة لشؤون منسوبي الجامعات السعوديين من أعضاء هيئة التدريس ومن في حكمهم.
        <br />
        - وعملاً بمقتضى النظام.
        <h6 class="text-center"> يقرر ما يلي: </h6>
        1- تجديد إعارة
        <input type="text" class="mt-3" id="noq" placeholder="">
        ، للعمل في
        <input type="text" class="mt-3" id="noq" placeholder="">
        ، لمدة
        <input type="text" class="mt-3" id="noq" placeholder="">
        اعتباراً من تاريخ
        <input type="text" class="mt-3" id="noq" placeholder="">

        <br />

        2- تتحمل
        <input type="text" class="mt-3" id="noq" placeholder="">
        صرف رواتبه وبدلاته المستحقة له نظاماً خلال فترة الإعارة، وفق المادة (74) من اللائحة المنظمة لشؤون منسوبي الجامعات السعوديين من أعضاء هيئة التدريس ومن في حكمهم.
        <br />
        3- على الجهات المعنية تنفيذ هذا القرار والعمل بموجبه.

        <div class="text-left">
            <p>وكيل الجامعة </p>
            <p> د. منصور بن عبدالرحمن الحيدري</p>
        </div>


        - الأصل للملفات مع الأساس (ملف الدكتور). <br />
        - صورة مع التحية لكلٍ من: <br />
        - مكتبنا. <br />
        - المستشار أمين عام مجلس الجامعة. <br />
        - عميد الموارد البشرية. <br />
        - عميد كلية الاقتصاد والعلوم الادارية. <br />
        - عميد الموارد البشرية بجامعة الفيصل . <br />
        - مدير عام الإدارة العامة للميزانية. <br />
        - الرواتب والنفقات - التوظيف - السجلات – إدارة المراجعة الداخلية- قسم التدقيق الداخلي. <br />


    </div>
</div>

@endsection