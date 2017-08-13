namespace Tool;

class Utils{
    //验证邮箱
    public static function is_valid_email(string email){
        return preg_match("/^[a-zA-Z0-9._%-]+@([a-zA-Z0-9.-]+\.)+[a-zA-Z]{2,4}$/u", email);
    }

    //验证是不是数字
    public static function is_valid_num(var num){
        return num == strval(intval(num));
    }

    //验证是不是手机号
    public static function is_valid_mobile(string mobile){
        return preg_match("/^1[0-9]{10}$/i", mobile);
    }

    //文件大小转换
    public static function show_filesize(int bytes) -> string {
        var kb,mb;
        let kb = ceil(bytes / 1024);
        if kb < 1024 {
            return kb . "KB";
        }
        let mb = round(kb / 1024, 1);
        return mb . "MB";
    }

    //判断是不是手机打开
    public static function is_mobile() -> boolean {
        var user_agent,mobile_agents,device;
        let user_agent = _SERVER["HTTP_USER_AGENT"];
        let mobile_agents = ["240x320","acer","acoon","acs-","abacho","ahong","airness","alcatel","amoi","android","anywhereyougo.com","applewebkit/525","applewebkit/532","asus","audio","au-mic","avantogo","becker","benq","bilbo","bird","blackberry","blazer","bleu","cdm-","compal","coolpad","danger","dbtel","dopod","elaine","eric","etouch","fly ","fly_","fly-","go.web","goodaccess","gradiente","grundig","haier","hedy","hitachi","htc","huawei","hutchison","inno","ipad","ipaq","ipod","jbrowser","kddi","kgt","kwc","lenovo","lg ","lg2","lg3","lg4","lg5","lg7","lg8","lg9","lg-","lge-","lge9","longcos","maemo","mercator","meridian","micromax","midp","mini","mitsu","mmm","mmp","mobi","mot-","moto","nec-","netfront","newgen","nexian","nf-browser","nintendo","nitro","nokia","nook","novarra","obigo","palm","panasonic","pantech","philips","phone","pg-","playstation","pocket","pt-","qc-","qtek","rover","sagem","sama","samu","sanyo","samsung","sch-","scooter","sec-","sendo","sgh-","sharp","siemens","sie-","softbank","sony","spice","sprint","spv","symbian","tablet","talkabout","tcl-","teleca","telit","tianyu","tim-","toshiba","tsm","up.browser","utec","utstar","verykool","virgin","vk-","voda","voxtel","vx","wap","wellco","wig browser","wii","windows ce","wireless","xda","xde","zte"];
        boolean is_mobile = false;
        for device in mobile_agents {
            if stristr(user_agent,device) {
                let is_mobile = true;
                break;
            }
        }
        return is_mobile;
    }

    //获取客户端ip地址
    public static function get_client_ip(int type = 0, boolean adv =false){
        let type = type ==1 ? 1 : 0;
        var ip = null,arr,pos,longip;
        if adv {
            if isset _SERVER["HTTP_X_FORWARDED_FOR"] {
                let arr = explode(",",_SERVER["HTTP_X_FORWARDED_FOR"]);
                let pos = array_search("unknown",arr);
                if pos != false {
                    unset(arr[pos]);
                }
                let ip = trim(arr[0]);
            }elseif isset _SERVER["HTTP_CLIENT_IP"]{
                let ip = _SERVER["HTTP_CLIENT_IP"];
            }elseif isset _SERVER["REMOTE_ADDR"] {
                let ip = _SERVER["REMOTE_ADDR"];
            }
        }elseif isset _SERVER["REMOTE_ADDR"] {
            let ip = _SERVER["REMOTE_ADDR"];
        }
        let longip = sprintf("%u",ip2long(ip));
        let ip = longip ? [ip,longip] : ["0.0.0.0",0];
        return ip[type];
    }
    //判断是不是微信
    public static function is_wechat()->boolean{
        var  ret;
        let ret = strpos(strtolower(_SERVER["HTTP_USER_AGENT"]), strtolower("MicroMessenger"));
        if ret !== false {
            return true;
        }
        return false;
    }
}
