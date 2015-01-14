<?php

wp_register_theme_activation_hook('BaseTheme','create_typography_page');

function create_typography_page()
{

    $content = "[vc_row][vc_column width=\"1/1\"][page_title][vc_column_text]
    <h1>Header H1</h1>
    <h2>Header H2</h2>
    <h3>Header H3</h3>
    <h4>Header H4</h4>
    <h5>Header H5</h5>
    <h6>Header H6</h6>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet molestie euismod. Morbi vel tincidunt dolor. Nulla tellus lectus, scelerisque in tellus nec, venenatis ultrices arcu. Maecenas sed ip<em>sum nec massa aliquet imperdiet id nec est. Phasellus volutpat auctor leo nec iaculis. Aenean id tempus dolor. Proin ipsum nulla, commodo id nisi in, gravida pellentesque magna. Nulla</em> ut adipiscing arcu. Cras sit amet est ut nibh pulvinar vulputate vel eu tellus. In nec purus erat. Etiam et venenatis nulla, ac ullamcorper dui. Curabitur eget vestibulum orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet mauris ut elit volutpat ullamcorper in ac risus.
    Curabitur id interdum libero,<strong> elementum porta urna. In vel nisl quam. Quisque laoreet consectetur massa, in commodo dolor lobortis eget. Sed u</strong>ltrices, justo sit amet placerat pulvinar, leo risus aliquam nibh, sit amet bibendum orci turpis id dui. Curabitur eu ipsum sed tortor tincidunt volutpat. Sed mollis venenatis tempor. Nam convallis suscipit nulla. In iaculis enim massa, tincidunt iaculis mi hendrerit eu. Donec vestibulum ipsum vestibulum dui ornare, a sagittis metus volutpat. Nulla hendrerit lorem purus, ut tempus augue tincidunt vitae. Ut a placerat mi.
    Left Aligned
    <p style=\"text-align: center;\">Center Aligned</p>
    <p style=\"text-align: right;\">Right Aligned</p>

    <blockquote>
    <h2>BlockQuote</h2>
    </blockquote>
    [/vc_column_text][/vc_column][/vc_row][vc_row][vc_column width=\"1/1\"][vc_separator color=\"grey\"][vc_column_text]
    <h2>Address</h2>
    <address><strong>Twitter, Inc.</strong>
    795 Folsom Ave, Suite 600
    San Francisco, CA 94107
    <abbr title=\"Phone\">P:</abbr> (123) 456-7890</address><address><strong>Full Name</strong>
    <a href=\"mailto:#\">first.last@example.com</a></address>[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column width=\"1/1\"][vc_separator color=\"grey\"][vc_column_text]
    <h2>Lists</h2>
    [/vc_column_text][vc_row_inner][vc_column_inner width=\"1/2\"][vc_column_text]
    <h3 style=\"font-weight: 500;\">Unordered</h3>
    <ul>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit
    <ul>
        <li>Phasellus iaculis neque</li>
        <li>Purus sodales ultricies</li>
        <li>Vestibulum laoreet porttitor sem</li>
        <li>Ac tristique libero volutpat at</li>
    </ul>
    </li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
    </ul>
    [/vc_column_text][/vc_column_inner][vc_column_inner width=\"1/2\"][vc_column_text]
    <h3>Ordered</h3>
    <ol>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit</li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
    </ol>
    [/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width=\"1/2\"][vc_column_text]
    <h3 style=\"font-weight: 500;\">Unstyled</h3>
    <ul class=\"list-unstyled\">
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit
    <ul>
        <li>Phasellus iaculis neque</li>
        <li>Purus sodales ultricies</li>
        <li>Vestibulum laoreet porttitor sem</li>
        <li>Ac tristique libero volutpat at</li>
    </ul>
    </li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
    </ul>
    [/vc_column_text][/vc_column_inner][vc_column_inner width=\"1/2\"][vc_column_text]
    <h3>Inline</h3>
    <ul class=\"list-inline\">
        <li>Lorem ipsum</li>
        <li>Phasellus iaculis</li>
        <li>Nulla volutpat</li>
    </ul>
    [/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column width=\"1/1\"][vc_separator color=\"grey\"][vc_column_text]
    <h2>Tables</h2>
    <h3>Basic</h3>
    <table class=\"table\">
    <thead>
    <tr>
    <th>#</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Username</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>1</td>
    <td>Mark</td>
    <td>Otto</td>
    <td>@mdo</td>
    </tr>
    <tr>
    <td>2</td>
    <td>Jacob</td>
    <td>Thornton</td>
    <td>@fat</td>
    </tr>
    <tr>
    <td>3</td>
    <td>Larry</td>
    <td>the Bird</td>
    <td>@twitter</td>
    </tr>
    </tbody>
    </table>
    <h3>Striped Rows</h3>
    <table class=\"table table-striped\">
    <thead>
    <tr>
    <th>#</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Username</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>1</td>
    <td>Mark</td>
    <td>Otto</td>
    <td>@mdo</td>
    </tr>
    <tr>
    <td>2</td>
    <td>Jacob</td>
    <td>Thornton</td>
    <td>@fat</td>
    </tr>
    <tr>
    <td>3</td>
    <td>Larry</td>
    <td>the Bird</td>
    <td>@twitter</td>
    </tr>
    </tbody>
    </table>
    <h3>Bordered</h3>
    <table class=\"table table-bordered\">
    <thead>
    <tr>
    <th>#</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Username</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td rowspan=\"2\">1</td>
    <td>Mark</td>
    <td>Otto</td>
    <td>@mdo</td>
    </tr>
    <tr>
    <td>Mark</td>
    <td>Otto</td>
    <td>@TwBootstrap</td>
    </tr>
    <tr>
    <td>2</td>
    <td>Jacob</td>
    <td>Thornton</td>
    <td>@fat</td>
    </tr>
    <tr>
    <td>3</td>
    <td colspan=\"2\">Larry the Bird</td>
    <td>@twitter</td>
    </tr>
    </tbody>
    </table>
    <h3>Hover</h3>
    <table class=\"table table-hover\">
    <thead>
    <tr>
    <th>#</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Username</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>1</td>
    <td>Mark</td>
    <td>Otto</td>
    <td>@mdo</td>
    </tr>
    <tr>
    <td>2</td>
    <td>Jacob</td>
    <td>Thornton</td>
    <td>@fat</td>
    </tr>
    <tr>
    <td>3</td>
    <td colspan=\"2\">Larry the Bird</td>
    <td>@twitter</td>
    </tr>
    </tbody>
    </table>
    <h3>Condensed</h3>
    <table class=\"table table-condensed\">
    <thead>
    <tr>
    <th>#</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Username</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>1</td>
    <td>Mark</td>
    <td>Otto</td>
    <td>@mdo</td>
    </tr>
    <tr>
    <td>2</td>
    <td>Jacob</td>
    <td>Thornton</td>
    <td>@fat</td>
    </tr>
    <tr>
    <td>3</td>
    <td colspan=\"2\">Larry the Bird</td>
    <td>@twitter</td>
    </tr>
    </tbody>
    </table>
    [/vc_column_text][/vc_column][/vc_row]";

    $page = get_page_by_title('Styles');

    if(!$page)
    {
        $page = [
            'post_type' => 'page',
            'post_title' => 'Styles',
            'post_name' => 'styles',
            'post_status' => 'publish',
            'post_content' => $content
        ];

        wp_insert_post($page);
    }
}

wp_register_theme_deactivation_hook('BaseTheme','delete_typography_page');

function delete_typography_page()
{
    $page = get_page_by_title('Styles');

    if($page)
    {
        wp_delete_post($page->ID,true);
    }
}