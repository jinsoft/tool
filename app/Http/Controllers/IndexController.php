<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function test()
    {
        return '{"success": 1, "mesg": null, "error_count": 0, "mesg_array": null, "total": 5, "data": [{"instance_id": "0303bab8-ee5f-4bd4-9970-2f197fe424e5", "mem": 2048, "disk": [], "cpu": 1, "host_desc": null}, {"instance_id": "7fc1501c-c633-45b8-bd02-e08dcca4b8b6", "mem": 2048, "disk": [{"used": "0", "mount_device": "/dev/vda", "name": "1-system-23611508", "used_ratio": "0", "volume_type": "high-speed", "desc": "", "type": "sys_disk", "id": "b13defd4-eef9-493c-8277-f2f4ea3d6003", "size": 21474836480}], "cpu": 1, "host_desc": null}, {"instance_id": "f0bfdfad-6498-4d8d-8de1-ff8c3a5df1b0", "mem": 1024, "disk": [{"used": "0", "mount_device": "/dev/vda", "name": "vm-2-system-29831646", "used_ratio": "0", "volume_type": "high-speed", "desc": "", "type": "sys_disk", "id": "ee882ca8-0a09-4846-a7a0-b906caca46f5", "size": 21474836480}], "cpu": 1, "host_desc": null}, {"instance_id": "716cb3ac-015b-4a45-bf43-ff3a82ecef72", "mem": 8192, "disk": [{"used": "0", "mount_device": "/dev/vda", "name": "xjtest-system-52215015", "used_ratio": "0", "volume_type": "high-speed", "desc": "", "type": "sys_disk", "id": "d0d43a65-d0d9-448c-ae24-d12e58bd2faa", "size": 42949672960}], "cpu": 4, "host_desc": null}, {"instance_id": "03f7d089-843d-4922-8807-7ba9e2fa1c35", "mem": 2048, "disk": [{"used": "0", "mount_device": "/dev/vda", "name": "22-system-56198570", "used_ratio": "0", "volume_type": "high-speed", "desc": "", "type": "sys_disk", "id": "a5fde92c-7bde-4b2b-9e8d-aa7dca7075ca", "size": 21474836480}], "cpu": 1, "host_desc": null}]}';
    }
}
