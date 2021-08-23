<div class="row">
    <div class="col-md-12 card bg-light">
        <div class="">
            <table class="table table-hover" id="experienceTable">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Wordpress Shortcode</th>
                        <th scope="col">Experience Name</th>
                        <th scope="col">Nexweave Environment</th>
                        <th scope="col">Short-ID</th>
                        <th scope="col">Campaign ID</th>
                        <th scope="col">API Key</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    global $wpdb;
                    $table_name = $wpdb->prefix . "nexweave";
                    $row = $wpdb->get_results("SELECT * FROM {$table_name}");
                    foreach ($row as $key => $experience) {
                    ?>
                        <tr class="experience_id_<?php echo $experience->id?>">
                            <td><?php echo $key+1 ?></td>
                            <td><?php echo esc_attr('[nexweave-experience id=' . $experience->id . ']') ?></td>
                            <td><?php echo esc_attr($experience->experience_name) ?></td>
                            <td><?php echo esc_attr($experience->environment) ?></td>
                            <td><?php echo esc_attr($experience->experience_id) ?></td>
                            <td><?php echo esc_attr($experience->campaign_id) ?></td>
                            <td><?php echo esc_attr($experience->api_key) ?></td>
                            <td align="center">
                                <i style="color: #4d148c;" data-id="<?php echo $experience->id?>" class="fa fa-trash delete-short-code"></i>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
© 2021 GitHub, Inc.
