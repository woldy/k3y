<?php
   $url='https://apollo.zhiyinlou.com/openapi/v1/envs/dev/apps/apollo_demo_key/clusters/default/namespaces/application';
   $headers = array(
                 'Authorization:'.'8f7927f490f4d18fa348fa8e937973a974a13118',
                 'Content-Type:'.'application/json;charset=UTF-8',
   );
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_HEADER, 0);
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
   $data = curl_exec($curl);
   curl_close($curl);
   $data = json_decode($data,true);
   $config_list=[];
   foreach ($data['items'] as $config){
          $config_list[$config['key']]=$config['value'];
           //var_dump($config_list);
   }

  // var_dump($config_list['config_files']);
   $config_files=explode("\n",$config_list['config_files']);
  //var_dump($config_files);
   foreach($config_files as $config_file){
        $config_file=explode('=',$config_file);
        file_put_contents(trim($config_file[1]),$config_list[trim($config_file[0])]);

   }
