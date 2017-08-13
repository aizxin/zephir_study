namespace Tool;

class Vars
{
    public static function testVarDump()
    {
        var a, ar;

        let a = "hello";
        let ar = [1, "world", false];

        var_dump(ar);
        var_dump(a);
    }

    public function testVarDump2(ret)
    {
        var_dump(ret == 1);
    }

    public function testVarExport()
    {
        var a, ar, ret;

        let a = "hello";
        let ar = [1, "world", false];

        var_export(ar);
        let ret = var_export(ar);

        var_export(a);
        let ret = var_export(a);

        return ret;
    }
}