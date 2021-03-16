@include('table.nav')
    <?php $cols = [
//        'parent_id',
//        'status',
        'title',
        'slug',
        'locale',
        'transl_group_id',
        'subtitle',
        'excerpt',
        'type',
        'preview_image_id',
        'detail_image_id',
        'section_id',
        'sort',
        'content',
        'color',
        'esb_id'];
    ?>
    <table>
        <thead>
        <tr>
            @for($i=0;$i<3;$i++)
            <th> {{$cols[$i]}}</th>
            @endfor
        </tr>
        </thead>
        <tbody>
        @foreach($table as $row)
            @if($row->locale =='ru')
            <tr>
                <td> {{$row->title}} </td>
                <td> {{$row->locale}} </td>
                <td> {{$row->transl_group_id}} </td>
            </tr>
            @endif
        @endforeach
        </tbody>
    </table></blockquote>
    </body>
</html>
