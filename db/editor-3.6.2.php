<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.6.2
*/error_reporting(6135);$Gb=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($Gb||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$ue=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($ue)$$X=$ue;}}@ini_set("mbstring.internal_encoding","8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0�\0\n @\0�C��\"\0`E�Q����?�tvM'�Jd�d\\�b0\0�\"��fӈ��s5����A�XPaJ�0���8�#R�T��z`�#.��c�X��Ȁ?�-\0�Im?�.�M��\0ȯ(̉��/(%�\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1̇�ٌ�l7��B1�4vb0��fs���n2B�ѱ٘�n:�#(�b.\rDc)��a7E����l�ñ��i1̎s���-4��f�	��i7������Fé��a�'3I��d��!S��:4�+Md�g���ǃ���t��c������b{�H(Ɠєt1�)t�}F�p0��8�\\82�DL>�9`'C��ۗ889�� �xQ��\0�e4��Qʘl��P��V��b���T4�\\�W/����\n��` 7\"h�q��4ZM6�T�\r�r\\��C{h�7\r�x67���J��2.3��9�K��H�,�!m�Ɔo\$�.[\r&�#\$�<��f�)�Z�\0=�r��9��jΪJ��0�c,|�=�������Rs_6��ݷ������Z6�2B�p\\-�1s2��>�� X:\rܺ��3�b����-8SL����K.��-�ҥ\rH@ml�:��;�����J�0LR�2�!���A��2�	m���0eI��-:U\r��9��MWL�0��GcJv2(��F9�`�<�J�7+˚~���}DJ��HW�SN���e�u]1̥(O�LЪ<l��R[u&��H�3�v��U�t6��\$�6���X\"�<��}:O��<3x�O�8��>����C���1����HR��S�d�9��%�U1�Sn�a|.�ԁ`�8���:#���C�2��*[o��4Xx�.k\">��A��O+,�x\\5t�цց`\\�o�����%�j��]��n��\\��h�=�z�ê2\$���F[NY����R��[I����7��tҔ��7��(���Wj0���2v}��;�k2��Va���r=��(��,��\r��j*�B(R�2C�N\\����9{a\0ŕ�VR4�B��/z�n�6�������(w�s�s��ǴB[��Mi#:#��U��=M-~����h)��	�p�C�9/,�r�=�s����#Bv���M �t=�@�hs���`k��p.=S�\"��j��&5�u��p#Y������Y	�~)�s4��1naV*��TS��q��6�\"[Lg����B\"|��2��Q�:8ƨ՞�\r�V��4�aj!�.&��Ã�o%0F9\"\$�Dȹ��?'��2B�A�ga�kr�'\$9\rؠ6�`eϻ di��2p\\�\$��>�7�\n\\��,���9�� �I��+���Ln�]�HHJ�� �KLehA���@��ؒ�@��ڨdʽ��*�H10���f!ܸ7�1HA�`��4�?���Z�U� w@(�R(�ϺT�2��0R����D`���b��q�qi���hV��j[!�S�X�:�\n�0F�L¢v�jۦ��9��J�fTx7�z\\�˛����+R@ҏd�^G�\0.c�`��>N��\\�F�s�g�i�\$߯%A�˴TI��@v.�\0�P�+� cNE���D�K�v��e9���볮*u�VZ`��=~d����De�}f�ӹ\0���5Ϭ��f:j�`�ME1ȯE����CA��}���)�:n��U�F�YL���f?e+��.�ZQ�ZCxz�ԣ�(`�ˋ~A�5�[�yJ1;��}�NS�L	�)���a����S���c��9���2�mt+��b�cRT�w|��7+9�\\0���SA�� ��g�؟:�T�.'�-�b��q�2�9c�P�S�Hֹ�#���1���������gT��Q��iּ]u�(v`ث��\r��>1��k�~-_��,���������0&C��\$���<0��{����g0��ֲط��%�B����v2�.�s�b�v�h�d��Bw�u�=�c�C�E�@>��");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:��gCI��\n:��sa�Pi2\nOgc	�e6L����e7�s)Ћ\r��HG�I���3a��s'c��D�i6�N�����2H��8�uF�R�#����r7�#��v}�@��`Q��o5�a�I��,2O'8�R-q:P��S�(�a��*w�(��%��p�<F)�nx8�zA\"�Z-C�e�V'������s��q��;NF�1䭲9��G�ͦ'0�\r���ȿ�9n`�р�X1�݁G3��t�ee9��:Ne��N��OS�z�c��zl�`5����	�3��y��8.�\r���P��\r�@����\\1\r� �\0�@2j8ؗ=.��� -r�á��0���Q�ꊺh�b����`����^9�q�E!� �7)#���*��Q���\0���1���\"�h�>��������-C \"��X��S`\\���F֬h8�����3��`X:O�,�����)�8��<B�NЃ;>9�8��c�<�*��2�c�9���>�H�z�Oj�B'B���������5�,�P�b5�45��3��@��:�N+i�j��J��ڊ\\��	�Ƈ�@�>���4Xr(Qr�� R١ d�u=�t�A8A{�c\\��)��|ׁC4\n6�W�7(V4l6�	�9\r�vˎa�&:CK��!�-��p�:\r\0V�M�Q�#�K@�\0�.�ـ�Vy���wE�\"��f�|j�bgټF>ċ	BHn�ݺZ��B�B�\$�F0���=��kC-9���C��O��9^Z3\r�r�7��0�u�w��M�g�Ű��v2��qI�����p����h5c�Pyǅ�.��[���hV'-�Y���T����ݛ�:v����O&&6��Z���λ	rn�����Bc�o� �0�M����xz]Ԍ�Ս��!�v�dz/s���C�푦=�d9K�eVX�s:p�ш8�r�A0&i�)֤R\$�Y_V�4���z��;ia�4���lI,&�t5��8�I�#_���s�Fû`\niE<�'�Jy0@�4�0��a5�>�3̺�@ĕ0D���k�2�uO��B��[��4�2d�V�<e�`6��C��	d>'EwAL[��iSE�R�[����\r�ߐ�x<��\\+�� xx�p���\0��;�A��p��C�V	�Y�R�&�3�v�y6�'y)x�j��@�rI��zh�Bp�I��f��ņ�J��Zr��<�\"\$T���^H��,3搐P��蜐�8f�,2������p��N�s�|�NU��sCM����t_�n�a��,�B�Vb�p4����\$w#�5%�8t�������ӝm��P����3�n���Ϥ�h�6Il��Nr�Q	��e�E�2�Lf'd��*�\":YM�#ELz��h\0%S��DH1��!�S&��[5	3%�({���^<��(H��6�X+�\"h�W<���_�tz��9�Z�uh�����f^ȋ=h��:+B�q�	P&�	�pba��\n�a���V2�W����& �Z�\0�na�ݭdX8Zv>����Ъ�b\nC�SJ�r���Z��W%`[�/h�R{\$�-����e��BGL�zNBp(�@�ݰ�s�(fd��G�bS5�57i?�PZt\nz�>��`]x0=�JcrRBy�Y�]c_#�S��-�/�\0�\n�l� a��1��2��@W���\n�A��#a,1���d��0��%a��d5��|�E�����kB���OK+̪P�~6�0���e��5�!2@�ø(vdb��q.�@ad������RC���e��)X:#cY�Z.|�c�Z4>��/&�P�V���2��w�H�B5�W�Bp�<p��'<E�� �*�:zFD�TgH�R�\\��*�+}����C�]�l.@V�8\$��Nj��:Ic���Ͻ�4k��^��<�)��Ӹ�\0St�ƣ�!olju������Zkmq���v��q�%ҺQM�ۮ-j�Y�3���&0��6�Iv{{� ����C}��Jz0�Vt��nb-�l���͓�ZWK��2�x��m��F>\nCs������n�C�!��M�0O��r��/��h2�B�dUs�����䖃�\"XK�>}�@���@Ч	�4ޥ7D\0��C��'oG��\"o��v�oMv��Hy%\$F���v\nU��zB�����i)ݺm�Q!\"��\n;��\0��M*�C\rOj��v�FD�O�	�/(���˻�y�;����g/�}�t9�l����0�7L�B��q�U��x�ܜM�@1��5ə[\r��o���a�I(���(����/ ��ia�dۛ�'�Ē>�>`&�0�6�8��#M7�|��\\%H��\$MT���\\�\r�����x`�\0qI�Db0��}�(0��C�T�F�����1����W�`�	����O|k���Ȟ�*��ol3��PT�h�@����d4(��p*����eHp�\$O�xl\$����@�44\n��#�T��\0h�\$P�θ�X�����H�� �L�Oi���\\�j(�hg)��\"�`p��� `��o��ϐ�/��������Ow�O	���äǋx�p�O���)��N�tj�\$`��n�+wi�\"�]��>�8��jH1Rd�Vo0�谋O���٠RLh�iQlU��� ���V�������/�\$������P7Q],R �f\\�V����O\r1��g�\$2�[�(4Vɬ�i���0��j��8�C��\nb�I��+1�+�8+M\r����d��%����\0�H(h��R���p�C��.F�EĄ�F�\n-�� �Î�*��#���`6`�&rj�Х\nn��&�lt�����\r����J�f�(��t�PS�.�=%�&2)�Ø���(��&�{&R�)L~`��\rRh��X\r���`�.\0%�*��+�J'�\\I\r��@�00��S	�1��1�f t\n�\0\\#\\6 �	��\rDo2�S@ �E4�L c�	�:>����E2k\n��<�ueX�s0D�s0\$@�COj��)��	�\n�\0��:\0R����/�8��0�K1��	 )-,�~\$#.�����Y��[�:��R\0Z?������\$�) �+S�������8#d<@��\nT���G+%�7�2ӊS�T�h;�,T���ƒ��7f]C\"EC�� ��.��aTLi�8��I�P��!`AD�\$,��&�f�Ĭ��\"%!�~�PL�F*�L�C\0��;LE��<@WJ#N��\$����>.�F����;M@�*��/�o��@�e~HK�u�Ⱥ����X�*\rʗ����%�,�q@�I����O���f�J�IH��L���1лS�a��o\0+I S9P*��\$i,�E��M���ki/ܪo�T\0��(V��κ���k��������,`\r��R� Ϟ��D��I�U��:�	�U130��d��@�Q�R\n\r�m���WK6K��{X�X�N���L�	�B\$���ŭSoES��L4Td�<��\$6-_ËL\$�d���h��_(rfe�IV.�c.��P��h�d��>	�h�/�5\0b�\$��\rTՀ_X`^�Yi	g��[�[vz��c2�o!���`\0�9�:�g,s���+\0�Fo;&]Yd���_/���&�m�r>u�1�����aL�(Ҟ\n�޴È��e�B�Y�82�`o�HV���\\��>�06���eo�cp�d& �:�@�I\$#�u �t�9�J*vt�:��F��=`8��/=�������������T�4��>K��>�'?�j\n��	(~\r��2��WB\"3�i4GI�K2�C�r.��,��K�IK�tVE,�Gb� �J}(��b�i��|Xn�n5�U E���;�� �]�f3mc��\$�m�t��BX.���/6�\"�7o��67\\<L�aD�s`X�[bFk�bI��n��ެr	��8.*�P X��+�xz��zk0�!�8�WyW�����l#Wx����8*\$�k�\"L#)��*\$�*�Ŀ1y��IK�|սI��lT��Рf�L��V	��~K& ���λjf?���L�hRDoE�\0GFV���D7v�i��g�y��Ӌ�`VQd���6.�0�\0��8���e�֠V�y �K��d��Wg��x�_��w���ʃ/ �[���\n�S�\\Y�8��8��>OM����[��P&p*�\"*��PC���c�q�r ����*ͧ�\"Y�K`�ceO0_i,�y5\r ��'�����ќ�5��\r��^5��k���ɻ_BKi�g����bU8�S��l���L�1Q�ϣB�)3���{��{�u�e�\r��F��T�p<⧣1>�C�d��\n��&&��(�H/cA!��+��d4�����:3,��6 \"Z�'�*Θ�1J��I�*%�ä8I�I`W{����{�Y���gy^7@��1h�ٯ��JWځ:�-���������d؝�v�[��K���ݲ:Od����U�.�:L\r��A�N�IPe�,#��=/��Z��C��O��եW�{z�%M�˟�6��tY�y��(��sXmT�@");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF87a\0\0�\0\0���\0\0\0���\0\0\0,\0\0\0\0\0\0\0!�����M��*)�o��) q��e���#��L�\0;";break;case"cross.gif":echo"GIF87a\0\0�\0\0���\0\0\0���\0\0\0,\0\0\0\0\0\0\0#�����#\na�Fo~y�.�_wa��1�J�G�L�6]\0\0;";break;case"up.gif":echo"GIF87a\0\0�\0\0���\0\0\0���\0\0\0,\0\0\0\0\0\0\0 �����MQN\n�}��a8�y�aŶ�\0��\0;";break;case"down.gif":echo"GIF87a\0\0�\0\0���\0\0\0���\0\0\0,\0\0\0\0\0\0\0 �����M��*)�[W�\\��L&ٜƶ�\0��\0;";break;case"arrow.gif":echo"GIF89a\0\n\0�\0\0������!�\0\0\0,\0\0\0\0\0\n\0\0�i������Ӳ޻\0\0;";break;}}exit;}function
connection(){global$j;return$j;}function
adminer(){global$c;return$c;}function
idf_unescape($v){$uc=substr($v,-1);return
str_replace($uc.$uc,$uc,substr($v,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
remove_slashes($pd,$Gb=false){if(get_magic_quotes_gpc()){while(list($y,$X)=each($pd)){foreach($X
as$oc=>$W){unset($pd[$y][$oc]);if(is_array($W)){$pd[$y][stripslashes($oc)]=$W;$pd[]=&$pd[$y][stripslashes($oc)];}else$pd[$y][stripslashes($oc)]=($Gb?$W:stripslashes($W));}}}}function
bracket_escape($v,$va=false){static$ie=array(':'=>':1',']'=>':2','['=>':3');return
strtr($v,($va?array_flip($ie):$ie));}function
h($P){return
htmlspecialchars(str_replace("\0","",$P),ENT_QUOTES);}function
nbsp($P){return(trim($P)!=""?h($P):"&nbsp;");}function
nl_br($P){return
str_replace("\n","<br>",$P);}function
checkbox($C,$Y,$Fa,$sc="",$Tc="",$mc=false){static$u=0;$u++;$J="<input type='checkbox' name='$C' value='".h($Y)."'".($Fa?" checked":"").($Tc?' onclick="'.h($Tc).'"':'').($mc?" class='jsonly'":"")." id='checkbox-$u'>";return($sc!=""?"<label for='checkbox-$u'>$J".h($sc)."</label>":$J);}function
optionlist($Yc,$Gd=null,$_e=false){$J="";foreach($Yc
as$oc=>$W){$Zc=array($oc=>$W);if(is_array($W)){$J.='<optgroup label="'.h($oc).'">';$Zc=$W;}foreach($Zc
as$y=>$X)$J.='<option'.($_e||is_string($y)?' value="'.h($y).'"':'').(($_e||is_string($y)?(string)$y:$X)===$Gd?' selected':'').'>'.h($X);if(is_array($W))$J.='</optgroup>';}return$J;}function
html_select($C,$Yc,$Y="",$Sc=true){if($Sc)return"<select name='".h($C)."'".(is_string($Sc)?' onchange="'.h($Sc).'"':"").">".optionlist($Yc,$Y)."</select>";$J="";foreach($Yc
as$y=>$X)$J.="<label><input type='radio' name='".h($C)."' value='".h($y)."'".($y==$Y?" checked":"").">".h($X)."</label>";return$J;}function
confirm($Qa=""){return" onclick=\"return confirm('".lang(0).($Qa?" (' + $Qa + ')":"")."');\"";}function
print_fieldset($u,$wc,$Ee=false,$Tc=""){echo"<fieldset><legend><a href='#fieldset-$u' onclick=\"".h($Tc)."return !toggle('fieldset-$u');\">$wc</a></legend><div id='fieldset-$u'".($Ee?"":" class='hidden'").">\n";}function
bold($Ba){return($Ba?" class='active'":"");}function
odd($J=' class="odd"'){static$t=0;if(!$J)$t=-1;return($t++%2?$J:'');}function
js_escape($P){return
addcslashes($P,"\r\n'\\/");}function
json_row($y,$X=null){static$Hb=true;if($Hb)echo"{";if($y!=""){echo($Hb?"":",")."\n\t\"".addcslashes($y,"\r\n\"\\").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\").'"':'undefined');$Hb=false;}else{echo"\n}\n";$Hb=true;}}function
ini_bool($ic){$X=ini_get($ic);return(eregi('^(on|true|yes)$',$X)||(int)$X);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
q($P){global$j;return$j->quote($P);}function
get_vals($H,$g=0){global$j;$J=array();$I=$j->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$g];}return$J;}function
get_key_vals($H,$k=null){global$j;if(!is_object($k))$k=$j;$J=array();$I=$k->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$k=null,$o="<p class='error'>"){global$j;$Pa=(is_object($k)?$k:$j);$J=array();$I=$Pa->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($k)&&$o&&defined("PAGE_HEADER"))echo$o.error()."\n";return$J;}function
unique_array($K,$x){foreach($x
as$w){if(ereg("PRIMARY|UNIQUE",$w["type"])){$J=array();foreach($w["columns"]as$y){if(!isset($K[$y]))continue
2;$J[$y]=$K[$y];}return$J;}}$J=array();foreach($K
as$y=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$y))$J[$y]=$X;}return$J;}function
where($Z,$q=array()){global$nc;$J=array();foreach((array)$Z["where"]as$y=>$X)$J[]=idf_escape(bracket_escape($y,1)).(($nc=="sql"&&ereg('\\.',$X))||$nc=="mssql"?" LIKE ".exact_value(addcslashes($X,"%_\\")):" = ".unconvert_field($q[$y],exact_value($X)));foreach((array)$Z["null"]as$y)$J[]=idf_escape($y)." IS NULL";return
implode(" AND ",$J);}function
where_check($X,$q=array()){parse_str($X,$Ea);remove_slashes(array(&$Ea));return
where($Ea,$q);}function
where_link($t,$g,$Y,$Vc="="){return"&where%5B$t%5D%5Bcol%5D=".urlencode($g)."&where%5B$t%5D%5Bop%5D=".urlencode(($Y!==null?$Vc:"IS NULL"))."&where%5B$t%5D%5Bval%5D=".urlencode($Y);}function
cookie($C,$Y){global$aa;$gd=array($C,(ereg("\n",$Y)?"":$Y),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$gd[]=true;return
call_user_func_array('setcookie',$gd);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($y){return$_SESSION[$y][DRIVER][SERVER][$_GET["username"]];}function
set_session($y,$X){$_SESSION[$y][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($db,$N,$V,$n=null){global$eb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($eb))."|username|".($n!==null?"db|":"").session_name()),$A);return"$A[1]?".(sid()?SID."&":"").($db!="server"||$N!=""?urlencode($db)."=".urlencode($N)."&":"")."username=".urlencode($V).($n!=""?"&db=".urlencode($n):"").($A[2]?"&$A[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($zc,$Hc=null){if($Hc!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($zc!==null?$zc:$_SERVER["REQUEST_URI"]))][]=$Hc;}if($zc!==null){if($zc=="")$zc=".";header("Location: $zc");exit;}}function
query_redirect($H,$zc,$Hc,$ud=true,$yb=true,$Bb=false){global$j,$o,$c;if($yb)$Bb=!$j->query($H);$Md="";if($H)$Md=$c->messageQuery("$H;");if($Bb){$o=error().$Md;return
false;}if($ud)redirect($zc,$Hc.$Md);return
true;}function
queries($H=null){global$j;static$sd=array();if($H===null)return
implode(";\n",$sd);$sd[]=(ereg(';$',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H);return$j->query($H);}function
apply_queries($H,$S,$ub='table'){foreach($S
as$Q){if(!queries("$H ".$ub($Q)))return
false;}return
true;}function
queries_redirect($zc,$Hc,$ud){return
query_redirect(queries(),$zc,$Hc,$ud,false,!$ud);}function
remove_from_uri($fd=""){return
substr(preg_replace("~(?<=[?&])($fd".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$Ua){return" ".($E==$Ua?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E":"")).'">'.($E+1)."</a>");}function
get_file($y,$Va=false){$Db=$_FILES[$y];if(!$Db||$Db["error"])return$Db["error"];$J=file_get_contents($Va&&ereg('\\.gz$',$Db["name"])?"compress.zlib://$Db[tmp_name]":($Va&&ereg('\\.bz2$',$Db["name"])?"compress.bzip2://$Db[tmp_name]":$Db["tmp_name"]));if($Va){$Nd=substr($J,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$Nd,$vd))$J=iconv("utf-16","utf-8",$J);elseif($Nd=="\xEF\xBB\xBF")$J=substr($J,3);}return$J;}function
upload_error($o){$Fc=($o==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($o?lang(1).($Fc?" ".lang(2,$Fc):""):lang(3));}function
repeat_pattern($G,$xc){return
str_repeat("$G{0,65535}",$xc/65535)."$G{0,".($xc%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($P,$xc=80,$Td=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$xc).")($)?)u",$P,$A))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$xc).")($)?)",$P,$A);return
h($A[1]).$Td.(isset($A[2])?"":"<i>...</i>");}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($pd,$ec=array()){while(list($y,$X)=each($pd)){if(is_array($X)){foreach($X
as$oc=>$W)$pd[$y."[$oc]"]=$W;}elseif(!in_array($y,$ec))echo'<input type="hidden" name="'.h($y).'" value="'.h($X).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($Q){global$c;$J=array();foreach($c->foreignKeys($Q)as$r){foreach($r["source"]as$X)$J[$X][]=$r;}return$J;}function
enum_input($U,$sa,$p,$Y,$ob=null){global$c;preg_match_all("~'((?:[^']|'')*)'~",$p["length"],$Cc);$J=($ob!==null?"<label><input type='$U'$sa value='$ob'".((is_array($Y)?in_array($ob,$Y):$Y===0)?" checked":"")."><i>".lang(4)."</i></label>":"");foreach($Cc[1]as$t=>$X){$X=stripcslashes(str_replace("''","'",$X));$Fa=(is_int($Y)?$Y==$t+1:(is_array($Y)?in_array($t+1,$Y):$Y===$X));$J.=" <label><input type='$U'$sa value='".($t+1)."'".($Fa?' checked':'').'>'.h($c->editVal($X,$p)).'</label>';}return$J;}function
input($p,$Y,$s){global$pe,$c,$nc;$C=h(bracket_escape($p["field"]));echo"<td class='function'>";$yd=($nc=="mssql"&&$p["auto_increment"]);if($yd&&!$_POST["save"])$s=null;$Sb=(isset($_GET["select"])||$yd?array("orig"=>lang(5)):array())+$c->editFunctions($p);$sa=" name='fields[$C]'";if($p["type"]=="enum")echo
nbsp($Sb[""])."<td>".$c->editInput($_GET["edit"],$p,$sa,$Y);else{$Hb=0;foreach($Sb
as$y=>$X){if($y===""||!$X)break;$Hb++;}$Sc=($Hb?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($p["field"])))."]']; if ($Hb > f.selectedIndex) f.selectedIndex = $Hb;\"":"");$sa.=$Sc;echo(count($Sb)>1?html_select("function[$C]",$Sb,$s===null||in_array($s,$Sb)||isset($Sb[$s])?$s:"","functionChange(this);"):nbsp(reset($Sb))).'<td>';$kc=$c->editInput($_GET["edit"],$p,$sa,$Y);if($kc!="")echo$kc;elseif($p["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$p["length"],$Cc);foreach($Cc[1]as$t=>$X){$X=stripcslashes(str_replace("''","'",$X));$Fa=(is_int($Y)?($Y>>$t)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$t]' value='".(1<<$t)."'".($Fa?' checked':'')."$Sc>".h($c->editVal($X,$p)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$p["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$Sc>";elseif(($Zd=ereg('text|lob',$p["type"]))||ereg("\n",$Y)){if($Zd&&$nc!="sqlite")$sa.=" cols='50' rows='12'";else{$L=min(12,substr_count($Y,"\n")+1);$sa.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$sa>".h($Y).'</textarea>';}else{$Gc=(!ereg('int',$p["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$p["length"],$A)?((ereg("binary",$p["type"])?2:1)*$A[1]+($A[3]?1:0)+($A[2]&&!$p["unsigned"]?1:0)):($pe[$p["type"]]?$pe[$p["type"]]+($p["unsigned"]?0:1):0));echo"<input".(ereg('int|float|double|decimal',$p["type"])?" type='number'":"")." value='".h($Y)."'".($Gc?" maxlength='$Gc'":"").(ereg('char|binary',$p["type"])&&$Gc>20?" size='40'":"")."$sa>";}}}function
process_input($p){global$c;$v=bracket_escape($p["field"]);$s=$_POST["function"][$v];$Y=$_POST["fields"][$v];if($p["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($p["auto_increment"]&&$Y=="")return
null;if($s=="orig")return($p["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($p["field"]):false);if($s=="NULL")return"NULL";if($p["type"]=="set")return
array_sum((array)$Y);if(ereg('blob|bytea|raw|file',$p["type"])&&ini_bool("file_uploads")){$Db=get_file("fields-$v");if(!is_string($Db))return
false;return
q($Db);}return$c->processInput($p,$Y,$s);}function
search_tables(){global$c,$j;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Ob=false;foreach(table_status()as$Q=>$R){$C=$c->tableName($R);if(isset($R["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($Q,$_POST["tables"]))){$I=$j->query("SELECT".limit("1 FROM ".table($Q)," WHERE ".implode(" AND ",$c->selectSearchProcess(fields($Q),array())),1));if(!$I||$I->fetch_row()){if(!$Ob){echo"<ul>\n";$Ob=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($Q)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($Ob?"</ul>":"<p class='message'>".lang(6))."\n";}function
dump_headers($cc,$Lc=false){global$c;$J=$c->dumpHeaders($cc,$Lc);$dd=$_POST["output"];if($dd!="text")header("Content-Disposition: attachment; filename=".$c->dumpFilename($cc).".$J".($dd!="file"&&!ereg('[^0-9a-z]',$dd)?".$dd":""));session_write_close();return$J;}function
dump_csv($K){foreach($K
as$y=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$K[$y]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($s,$g){return($s?($s=="unixepoch"?"DATETIME($g, '$s')":($s=="count distinct"?"COUNT(DISTINCT ":strtoupper("$s("))."$g)"):$g);}function
password_file(){$bb=ini_get("upload_tmp_dir");if(!$bb){if(function_exists('sys_get_temp_dir'))$bb=sys_get_temp_dir();else{$Eb=@tempnam("","");if(!$Eb)return
false;$bb=dirname($Eb);unlink($Eb);}}$Eb="$bb/adminer.key";$J=@file_get_contents($Eb);if($J)return$J;$Qb=@fopen($Eb,"w");if($Qb){$J=md5(uniqid(mt_rand(),true));fwrite($Qb,$J);fclose($Qb);}return$J;}function
is_mail($lb){$qa='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$cb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$G="$qa+(\\.$qa+)*@($cb?\\.)+$cb";return
preg_match("(^$G(,\\s*$G)*\$)i",$lb);}function
is_url($P){$cb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($cb?\\.)+$cb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$P,$A)?strtolower($A[1]):"");}function
is_shortable($p){return
ereg('char|text|lob|geometry|point|linestring|polygon',$p["type"]);}function
slow_query($H){global$c,$he;$n=$c->database();if(support("kill")&&is_object($k=connect())&&($n==""||$k->select_db($n))){$rc=$k->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$he,'&kill=',$rc,'\');
}, ',1000*$c->queryTimeout(),');
</script>
';}else$k=null;ob_flush();flush();$J=@get_key_vals($H,$k);if($k){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($J);}function
lzw_decompress($_a){$ab=256;$Aa=8;$Ia=array();$zd=0;$_d=0;for($t=0;$t<strlen($_a);$t++){$zd=($zd<<8)+ord($_a[$t]);$_d+=8;if($_d>=$Aa){$_d-=$Aa;$Ia[]=$zd>>$_d;$zd&=(1<<$_d)-1;$ab++;if($ab>>$Aa)$Aa++;}}$Za=range("\0","\xFF");$J="";foreach($Ia
as$t=>$Ha){$kb=$Za[$Ha];if(!isset($kb))$kb=$Ie.$Ie[0];$J.=$kb;if($t)$Za[]=$Ie.$kb[0];$Ie=$kb;}return$J;}global$c,$j,$eb,$ib,$qb,$o,$Sb,$Vb,$aa,$jc,$nc,$a,$tc,$Rc,$id,$Qd,$he,$ke,$pe,$we,$ba;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$gd=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$gd[]=true;call_user_func_array('session_set_cookie_params',$gd);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Gb);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$tc=array('en'=>'English','cs'=>'Čeština','sk'=>'Slovenčina','nl'=>'Nederlands','es'=>'Español','de'=>'Deutsch','fr'=>'Français','it'=>'Italiano','et'=>'Eesti','hu'=>'Magyar','pl'=>'Polski','ca'=>'Català','pt'=>'Português','sl'=>'Slovenski','lt'=>'Lietuvių','tr'=>'Türkçe','ro'=>'Limba Română','id'=>'Bahasa Indonesia','ru'=>'Русский язык','uk'=>'Українська','sr'=>'Српски','zh'=>'简体中文','zh-tw'=>'繁體中文','ja'=>'日本語','ta'=>'த‌மிழ்','bn'=>'বাংলা','ar'=>'العربية','fa'=>'فارسی',);function
get_lang(){global$a;return$a;}function
lang($v,$D=null){global$a,$ke;$je=($ke[$v]?$ke[$v]:$v);if(is_array($je)){$kd=($D==1?0:($a=='cs'||$a=='sk'?($D&&$D<5?1:2):($a=='fr'?(!$D?0:1):($a=='pl'?($D%10>1&&$D%10<5&&$D/10%10!=1?1:2):($a=='sl'?($D%100==1?0:($D%100==2?1:($D%100==3||$D%100==4?2:3))):($a=='lt'?($D%10==1&&$D%100!=11?0:($D%10>1&&$D/10%10!=1?1:2)):($a=='ru'||$a=='sr'||$a=='uk'?($D%10==1&&$D%100!=11?0:($D%10>1&&$D%10<5&&$D/10%10!=1?1:2)):1)))))));$je=$je[$kd];}$oa=func_get_args();array_shift($oa);$Nb=str_replace("%d","%s",$je);if($Nb!=$je)$oa[0]=number_format($D,0,".",lang(7));return
vsprintf($Nb,$oa);}function
switch_lang(){global$a,$tc;echo"<form action='' method='post'>\n<div id='lang'>",lang(8).": ".html_select("lang",$tc,$a,"this.form.submit();")," <input type='submit' value='".lang(9)."' class='hidden'>\n","<input type='hidden' name='token' value='$_SESSION[token]'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&$_SESSION["token"]==$_POST["token"]){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$a="en";if(isset($tc[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$a=$_COOKIE["adminer_lang"];}elseif(isset($tc[$_SESSION["lang"]]))$a=$_SESSION["lang"];else{$ja=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$Cc,PREG_SET_ORDER);foreach($Cc
as$A)$ja[$A[1]]=(isset($A[3])?$A[3]:1);arsort($ja);foreach($ja
as$y=>$rd){if(isset($tc[$y])){$a=$y;break;}$y=preg_replace('~-.*~','',$y);if(!isset($ja[$y])&&isset($tc[$y])){$a=$y;break;}}}$ke=&$_SESSION["translations"];if($_SESSION["translations_version"]!=783484537){$ke=array();$_SESSION["translations_version"]=783484537;}if(!$ke){switch($a){case"en":$i="A9D�y�@s:�Gࢩ��b6@�����l7�L���i���D�	��m:�c�������`���s	Nd)A2̳�q�� 2ɎgI��p:AF��i�D��9ȅ��a��g:�L�Xa��P��m�[���7��CD\n�t2��f���u=��)GK\r��r��N:ܤŏ9���p�:I�3�Vϙ!V'*�8�t;�\r`�9��m��,�|`(�d4��X�;p\n(\\�{���o����m�G�tkfS���N�\\��U�K1p\0�8�Ӏ̞r�PP�b-�PQL�Ռc@�#�������ݍ� �m\n�����\"���@Ón����2��K��b�@-��޿������B���\n��b7�Cbq�/-�zD���P�\$Bh�\nb�-�2��.�#hZ29�c���o�,�����\r�,(9I.L;#`ҍ�b��#/cx����b�/��-Q�ܑL�<Ѓ��ơ�c0�6\$O����Ԡ�8AAP�ǊB�%��0�\r�P�4�# X\"������G\$S��=�j�3��1LX+k��/�Q�Ix@(	����@'AJ8����@����7���m�☨M��\n)%��%D�(��\r�5u�IՊ�#�@��V�i42M��%Q�q%�#\$*�ՠP��G1�8���C���V5G���90\"D���d<;�����!�\\*��~���Q�/cBn�ݔ��\$����#c�Ѝê��M:�<��QF���X��&_��#0͊U���H��n��!��`V1�C�T(��6k�\rL7�0�Onw��q�b�ԙ���\r��%sN�l��m��-�^��]�R_cÝ.ϫ8~\r��\n�)\0A=\r�>�6�O%���^��9+\\��m�w�gl�̍w.z5��\r��N;�0����;�=>i\n@E�7`��X̊����L��-x��HY� 	�- �(Jp!m@�\\";break;case"cs":$i="O8�'c!�~\n'N�!���4�\r���@n0�L5	�(o:���!p(�a<M��a���B���a�\\����I��s��#��@j�	Nd))N�#��L��֑%��FIr�pb��u�x)���Y\"���u6�2Q\0(�a=M`����:�)���1�1WƓQ�-H�Q�B	��o���m<� ��j�pQWi;q�Ù��k:N�S/9� �&��0���	�̘2���ь�\n!f�)r�S��T��9��m䜍<��6��CI�G���u`�A�ro�C�&�dp����x�95/�ְ\"�8b�)��'3��1C[v('�Ș(�B7B�PJ2�Ɓ1K�1LI1�0����焁�\\��b�/�ʆ�#X�2����댨x��0\"bT��B��H���B(Z6�(�'��^�>b�!��[+B�[538�46�#�4:��!��873q �/�#`\\�S��@L��?G�T<���td���-��ҴB\"���q�G��@t&��Ц)�C \\6����[�B��2AE�7�R�=\"7c`�9I� �d!#�З�`�5��\0�)�B0\\OPbj�2F6�Y2<���̕�&�19o�&;1z�5�r`����%�6�cr�\\�2`1e�<�&�qR���;6C�������!��,��,&��#��f��~=�Pc00�ix@a�HkH��8;=A��3x!�@2'��8`�V{�2hXȅ��M�1�\0�\$\n���[�\nPR�Γ8�')�\\�\nx�*h�P�m�O\0�w�\"��]�p\rdk�2��4����o`�\$�E(9�	��\n�#���s\0�A��5�D��@0�zPP�?���,�u-�s8��(���r�xP�A��.I*��T�P��s���onf�iOrط.�J*�2����][5��o����h4��\n<��ߖ�6l�E.Q��0���P�����T{�57)DH��	�'���\0�`[�T>�5H��\r��5���\0WBd���:�V[.k9p��i%���5C���IZ)�أ��#��@H\"z��\"q\$9D�?�tD��4�� D�	9X&����@SK A�*R��Y|E�<\0��E���9e�׽�\nWy�1�Ә�,C���O:Վ��	7)�\$H��8kE�:���&��kFA8���N���qa����Kh\n9��h�{\$��v\"H��%���PI\r�\0��\$�,�e{�q�\0������a}�\$1X*\0006!�";break;case"sk":$i="N0��FP�Sa��F��a��y��r4�\r�	��ab�E��i��i6��&�tB(v7���P��eb/�f�	����Q�@%9��p�T2\"e2��gC�Fp9J�FH�*i3�f��Szi0�(�C	��95�db\0Q(�z<��EcɊ?!S���6��NGJ5�C='f���i2���:]�Q4��YU���8�����T������FaNf�(�*�a�Di��\n)d7s�B�J�UҞc\0G2�ͦS�czZ�KM�b)��t�`M�]>�W8_�]ٿ4%G3L�\n��T�6*����i�0	̲j�#M8�ފ	�d�&���P�И��\0Ă�LAD��M�cS�;C��\rϰH� i�+��4'+J@R�CX�̍��n�<�0�0bP�B�1����H`P���\n2	�\"x�7�c���#�:/p�|�Ȍ\n�\r\r��K�b\"��h^���0LC`\\��`�@L��61=0�+���t\r%A�cE\nR�K,������	К&�B���p�c�t9� �/�\0�Kej��z6;�;��Pb'4�m��5�a\0�)�B0\\Of*V��26���B��Q�T�̶\0�(���1��6;��2\rc���?�x�~�C+�7R���\"�%�f�`c���͠�q-�Y�@�R��!�C�k,0�bu���3��e���ʲʳ�(�@��W���X��(�5\"�kN�-Ym����}AQh�1[�0�\0P�)�V��l�5툠'�b�Ad�+e�-awɹ�AC{�c��a��\r�j�2X0̰���2�[�ӄ�c�R<�{59	b)�!��(��NP�E�o��됍#ִ�u@�um�m9b�J�,�\0�j����b���x*4k�2���Z�\0�8\"�8�44-�ڙ4���\n�|�Z�������pe\rC�|�.���Ӛ|b����wK��?�0f�YP�8����[\$a��V�pki.��s�+N!;dnd�\0@�Nk�L-:5	B�E�M�*0�V��Q�>��f�Q<7+�0�8t�!�m�N�^�m\"*�@������H�\"�b1Պ��#�#�	\";#D�NpVh����d��XYC1������͛W=��ÑT&dc���:oH��M�\r����[Cj��H�s,�`o-%�3ɉ4�CiiƬޜ�����I���4���E�����@�	d7��[qp%O�*EB�oB��6�U�'Bl���;";break;case"nl":$i="W2�N�������)�~\n'����9��i5�#)��a7C,�l7�L�Sp�M0�\r&ө�Fo2�M�!�7��Nfs���t�\r'1\0��B��	������d��3���#I��n��Dx�?6W堩qP�a�[G#���k2�ﱡ��� �͑Z���x����1�4�Q��g���2e�+�6�e�����+��N�~�,'�\\u�0d!q�Q\n�a4��Z̰�\n'@������m�Y��db=�\"�\r'K���9��sh(�a1��z1ˀI7J��,\\�3�܊�c�'*��\$�h�λ�\0�0��X�C�0�7\r���h7\r�PH�� g� P��!�r�;!��)�i#?*M�俈#�ɁB\\�\"��k��\n� �N��88)´��0ԝ����+��<2�2[\r/�iZ[�S\$�4��dh9SJ�\rè\$	К&�B���\$�6����E�B�*�o���9�r�9��,���`�9F�l�'�O�b��#&�\\K�H�:�����h���\0�8*�,�R�\$�9h�w\n�p���H�@��VB*�Hq�^��������NHjP٥��^F����k:F���#R���(���,iK%�e�ǲ*�k\"�2J(	��9̛6����[\npR�\nx�*�\"x0ܗ�����}b5���`4J�J4�Y?_@�`�\r��j�T3֩⮗	0l�(��~��@H�&�i�(۟��Į3ٮ(�):�h@�\rS��7��@�vĐ��;N�\$ٲJ:\r\nZF0�J�\\'���p��i]l�l\r�����.����q.������ǫ@)�0�d�)��˩��p�O��^X�]�u�;�탯���VM�:��=��D��ex�8G(�t�'n��O����z&�#�ދd�¿M�~#5Ζ8�-�6��΍6�܍_0�WɲV��a>�ܒ�����s\nP〥���lda葃p	I�@gr�2�IY�aEh۪f�GC��3��:�p��p\n���\$tnK׆�q\"��s#b�`��,��FA۔��K\0";break;case"es":$i="E9�j��g:����Q8� 2��y��b6D�lP�t0����v7��EC	���X�Ͱ3�rd�I\$҈�HJs!J�'),�n��f�,��i7�k�@(�r4��d6�K:M�	`�s�D�!��.NrQB� 3e#�@u7D���<XM�cy�\" �Ш��y�J4�%ECLR%83T\r&H|z l��βt6�m2`�1�K�<�\rs(�a�`AD*�`�\n)L��9��e:�j��33 ّm�J��U���9�a�7֍��Y��!�g//�u2�95�*�6��8 oSz��\0�<� LA��<�J�H�� g�-���cI�Y�m �� ���,K��6�#� �qF�����9B*\\4�� ��Cs����# ��;���;\r+�2��B�*8	L���Kr�H�Cv�B@�	�ht)�`P�2�h��c�0��P���d+3-X�4�O��#,M�\0G��c*4��7�k@!�b����h��\0��\r����r�D6\"��(�c+P3*�h��8�P��4l�k(�)T�1SȊ@�\r� F.�\"H3�M�-����=�b&��+�I\$�(�T��ò4�\r��P�-�ЌcB�ԃ�Mb�Hst0�*Sm�����,+�,V�(	�\n7��މ	�R��H\"�9��z0���x�*V�r�\"��A\$�1:�9# �=_�:Ȗ��@��#�aHbL��@5v#G�(C�D������SN�+uC��멐޶ߒ�U�?�zR ���G;@�~ǘ30�,rS�袩P�B���@�\"jĨ���{���z²\$Ȓʌ�B;��ǜ�C�\r�\0ޯ��j��?<�tۃcg��{E�y�kڑ�چ�/�}�0��=��Έ��tXǍ�RV�WV������CZ%P~���h������H�;.��\$�\"��]6��m����۳�;LxN�c,E�}\$3�a��\n���tDt^di��f�D�� IKF�5j�Cj�yA��T�6Oy�6��\\�Pg�( �p�zNHޤ�T���#�e#�5h��x}h�\$�&�}��IZ���l�aflm��#״H��g";break;case"de":$i="S4����@s4��S��~\n\$�F�	��n��!��e4��SA��e9��2sp�M0�\r&�	�A�LQ�v>i3��kc��i9�S�\n]>�M�T�L2�n����a�\n'���(� 7A����]���\0����a�AD(���z:����I�yh��\"�چ�p���u���Ǫ&Z�Ҫr�JM�u�+�b�h~xT���E��e>:�D�X�� :l��q�ˆ��,5!�N㞎��X(�e7�x�+�2�7��L)����W�)���&��W����+0�@�'���9���&:)��/A*!(��>9�C�P\r�x�pHDA��:��R�6*���C\"��\n.�0@P�5����#��ģO���H�\n���:C(�3\"\0003e�Y\r�C��/B��!.3�\n�@�%bO2q�]	�sL�6sh�7�S*�\rPJ \$Bh�\nb����p�5RP�N�؋<2�:�c���<#d��!���!�b��\n�|�0#<�Q(t*§�\"#<�h�F0n9-+��8L�t�K���3\r�4�����X�#l���#x4��r�Z�,p3�c ����r�u�cpX��3�2���f3\0P��Vl�N7�܋�H�hI�{��:����¡��0��)�X�,�C\0000(���+��\n@�⸾M�B���2�\r�0�\nx�*1H��0�7����2٣�>Ġ�R����7m�L9(*�b ��0\n겗<�9%�m`�:��{2�@����lHT� o#��/�{���CD�:��ĵ?�d\"�d8��%���:��LC��pIC,��}`8]I���O#�خگ��b.���0(e\0-���\n���h�{�9�R���Ct�,�b(�:\$v#e\n-\0��&�l�7�w�(\r�X�N:Cs\n���������%	t)�@���y�No�Ü�P�tl��\0=⬲��w6��ޖ�VWI\$\$Ġ�%��c�Hd4�(��I}5a��s�q_q�j���tQ��V*��\0��ʐi��:9r.�1�@Ἂ�|H� \r���:��u�@a\r����\"��Xl#f�\"��g�a�	/�\0Ɨ��[9#X�\0yzp%0ǐA� ";break;case"fr":$i="�E�1i��u9�fS���i7�I��o9��&#a�@d�b��l0A�&3A�.\"q��(6�O#������L��	Nd)�2=*�K�B\n0� t9A���`v4��RCI�!=N�3��=���	��u2���I�����Y�t� :�\r��1�Om�O览�4o�)T�}\n�T���S���@��Nf��\n'ͦ#�D�G��sFj\n!�,5u��\n!Y�;^9I����N��??eϬK�7���2u��ޫs�M�y���a��mGM��P�s�O�,�܆'+s켶#��2���69�h��6�`�4�eCj�#:���\0�1�C�DQ#v�-��7�A j���h�B�ʖ!��^7\$)Ke�*J��6�O�H�\r�P�Gc����RL\n�C��ݢ���ڵ�0T!hH�7��7 �k_BH�:�&nÞ�Nx���<C:�p��(��S>N.x�'3hܺ��@�	�ht)�`P�5�h��c\rL0����1�rv��#2�ުh�2U�{l6+����5�a\0�)�B2�8'�\n�0L\"n2��u>�I:��\r��؇����6�3�,�ځ\0�'�u����2�_^��<]t�à�E���o�La�_��ń>�K�@UXЃ�I���Bl�\"��0R����bܤ2l�D��@�c������)AN�����o\\�*\0�'�b�h��\0�9.��\\9�H��/�=��!��X��\n����&j�:�)�n��:�X7%K���\"/nb()�<�7tT���k��#m\0��EL T�J<��Och��\\x���|���QVX�1��W9%-YU�G[�p�;;���{�\$���wY��ܦ�j�#����Ac8�9'���yނLݡTB �V��þJ^`���*���t�L�mwq��B-ew�G�p��E�]]\0��;�a*�8w��C@�2�Xc1aļvjT̃'���%�NL�I*%�)�����{\$L����	�2\"����HZ�ȩ^�u���:��i�&o ���YY/ƭ\n#���9�1mu����1Pu�E��Bá�M�9\0���S�B�d��R�[�|o6�07��]��uPd�Ț�����v&�>�\0�a�0~s\r�:G����E���9�\n�d��y4A�<^";break;case"it":$i="S4�Χ#x�C0��&i��t7��S`��i6D�y�A\n:��f���L0č0�q���L'9t�%�F#L5@�Js!I�1X�f7e�3��Lv:��\0�|(�i7c �tD�a1E#2i12�g:�AES���):�f��5*�-���3�\n�:���\n�\rA&*N��^�t�V��s�ޛ\\:�a@�!��IUmE3�(�g4AD*�\$�\n)r�s)��4ڬ��Q�\$���ڢ���w��D�; c0��:�a��8NS#w;TN���1C,��U6d&�^�%2G�h'���R�G��p�xH�A��:\n��7#�T'�M����i#T �I�)���&\"���0�-Bx�3�J����CJD׈+��3��|V;7 S�2�#\n0+�<0�ϳ�DH��ܩ�0��x\$	К&�B��� ^6��x�<̃Ⱥ�x+E�H�4�C�R2F�S�9Cn���B��5��\0�)�B2�����2\r�p@��iHؔ�C�4��\"���(�3E+K>1���1�jP�F����U/,`��#�\r^9#K0�3�t�:aE'��X.j��IrT��5`�\\\"cs�EP�7�i4һ�����;�_e��R�9�H��\\+�@(	��:�����aB~�C���I��_,�!m77��)��p�E�uĀ�F�\r�̹�J5I�U���Q6}H7\"�@���)������6��,ј9ȋګ���l\"�xޟ�b�	�{~��\"uԹ*�в7��\0�0�j8@8!Q�3a _�:R�\n�1,pڵD��fJ�d�ܴ�;��[��ȏ+M,��B����ͯK<���4�'�>���<:Sq[0|�wɍ)0�PM(��sx�5�����*�Ӳ9n�4�H�V>���6�C��\"H�CQ���z�C��<�\"k�S��IM��\$)�v�Z.o�u�˶4�<׭�+7��g��!z۵����-�ȍ�ؤ�+����%g����U�I'\r�<������f-E`��G��Rn��'��K�xE�!����[`]��=#`^8\ni/x�6#*D\0";break;case"et":$i="K0���a�� 5�M�C)�~\n#M&�H�����͆	��m�D\$���Z��1CX�M0��r�Y�Df�EgS�����R�N*e��M'C��\\t��\r �y��g�G\r�����\r�A�\nU2�\n�fXm�u:AE	Y����b��A��2���C)��A�ND���� 2̍8keX�.�N�&�\rAy1L��q��b�N�֩����2��x�\\66a2��6�B��N@����k\n&�C�T�)̦�m��V�2gM�J\r1:Um٣p���F� (�o�&g3��J�ޤ�V�=̛h4�CS�+\r)Rl��C\"����J���X	���,(7\r�PH� i� P�:&`P�0���H��B�������K��ܶ)�Y�B(Z�0�Sl����ʕ�1Цɰ��^0���V)��\"�.#�*̄@�`tBip܋���\$Bh�\nb��\r�p�<σȺ�>�NR\r�㈎/R����c��#�s���Ύ�\0�)�B0X������.#:L���y*�)s�B3�e��I@ܛ0��\\)�����ㄟ��-.�1���^>�M~����λ)���P��\rMU�c�ɾ�p��\rj���ň0AE:�8���64�##HT���Fu���>/�e��(/���0�J���)��m�1\$T��h,�JV�'i�]����6�.�	:R�'�>Qm�)�8���:3�0ֈ�k[ʵ�*۹F�[W\n`��L�.j7��0�5����e%�jy/F�#E]C��:؉p�7�#@�IF�Ȝ��<5P�/0�\0�o\n�]�t�\r/��1oΰ����A\$˃g�q��׎C=h�W2���1���(���4��9�c<�&�SN���ib*���(ؗ	#jH9#��Ѓ���\\���Z��X��i�(�\r���mɴ_GR{����|��.�d�<�G\$ɢ�r�	�l�7[��CK���\n7G���ҪH��>5�Ж��H+�|e�Y5D�L�O�4VL�A�S,\\��W\n�m\nF�:���B	@i! ";break;case"hu":$i="B4�����e7���Q8�m�C|@�e6kh� � 0��5	�2.D�	��m�\r0Y��0T���A\0�\nB�J��a* la�N�SѤ�(a�'G0Q�td��a��q�P���@�y��D�	��n������Ba�3�)��K9���Ҥ�t�Ȥ�JE*�N�����CHY��JӁ֨S=I\r��\$�%��M&F*D�����pT,r���,5���t̱Y���\n&LΜ}X׃�kAY#fRݖ��Q�v�k��5 �)��=�-)��5Di4�`(�6��y��0��(ȃ1c�@�,\rP(�*�p���\\��b	j�����4?�x�9I\nt7+\r\rq:�P�i�X�Cbw\r#�b��\n����K��##�*\$���<���t9B�߿��B7JZ��<p@�\"20@�\rr����<1ȣd�6M%��6M�<�3MT�\r�#��7���8CkF-�4h�.��h\\2G�k����午��ʎh��J�Q�2���)�\0�7�O�Z�apA/N�\$a�CP份Q�䱎{ש���#<-K6��p�0��Bv2�hP��9�5����,�T��@��x�9GHH�2�m�k�(Ry\rRh��:=RX��T��SU#d�,)�ڻg����3���mk�P�#<�:'���(^+��� MM��/w\$I���9���B(	☨�?�CV�E���à��/V.�'	����Ò��s�/�0ʘ��Hñ:�0��b9?�[��37�l:O����NH<�Q����cY�3��A�[�I#3��ĸ�#x�2��\$\r��#6l\"7��ᦌ��Й�#\n�|Bjª�֫�gKs��w��<�r��x����\\>�����a�ʸ��l�d��v�O?���i@�:X�Xƙv�h�l0\0�ؠiX�2\r#0��(A\r9@\0ڲT�1lOy�H\r\0l�i��!�y\"H�����@!����X�0\nxA�Ő W��S!H)B�I�-�\\���W^+�lL 7�Ba�8zU��­�`,ȣm��PO�����0\0�<�1�*�ޒJᴌ�%��@�N9o�(�����A+�f���p�f�z<��\0���<m�qg3�LI!@�\rh�7=2�X�PO-�t8�-�T?x��2�";break;case"pl":$i="C=D�)��eb��)��e7�Es9��n��͆�Y�@b<�PF�`�m7�W����\\\n&�Mg3ɴ�l7D�)��)M���x�\$��R�l�%��`�h\$��u�AF#)�@z6�b�Z�t0�\r��\0(��L�Mq3Ɋr=�#y��peG��d7L�J���~2�!AЂ�L�@�K�H�T�����6y:O��Y�N:�r'��\n\"m���s�ftym��99m�p�(�e7쎇+(��<���MA��\n*��&�\\pH�ȍ����g:��3M��a8l7G�悍O��� C����P��7H�t�/������5�L)C�5\n�P��a�c��.i0�pHE��)�C�Z5C8�=!��؞.b��:>.�Ұ��R\0<��r��{Z�;Ajl4��x�2#���\n�;t�\r��p��F!\nڵ�J脣q��<�i.�B�,�0�p9Τ��O3ܰ�O��'P��+�iz�/\"@�	�ht)�`P�\r�p�9T����\r�|�(JC\nTK�����l�Z��x��!�#�;�J8ֈ�)�p@)�q ���tU���:��\n����s���uK;�r�ڐ�i���i�΋�H\"\r�:��\0004�a\0�\$\n	x�\0'V�@�!b��>��Lۖ�L��#-w.�5�F����\\O\".�%�*d1̃%F)w-�*�P7���#��%��0)BT�,P��\r��5��3��Q\n�B�v�\nHR�c���X/���81*c%�Q��A����IX�P�6����1@\$ʎ���`Ǣ���į�˂f�,|�5	��3\r/�,1�#P��2�P��P�����9����<���̫��E��r\"n4�w&���\"����X�2��#��H��L���8��x�7��@�;c�ev4��8΂�\n;8K�?�4*^��64/h�p�z�������`�h0���}\r�w3\$���&[�\n������DJ�O�ڧ���J�Co:@�D\nQ�Q̼�^Θla�����w(\"��Дs�dE��7j�C�I�6�Rȝ����9�r �,<���'�l�D8s�2%\$8��My�p�4�\0�Co.���\"�Z�s�x (�>F��[�[!��|��n#���/�\\W�;�(o����U\r��[������DB��rI;W�u�z[8�L%�@J3-\0)`fnN��t5\$<�P�S�(E&q,�z�ˡ~F�\\����*H0k\r1�3�����i��ڢ��\$�g/d�\0";break;case"ca":$i="E9�j���e3�NC�Q\$�p7��f��� 0�\rGSq��rM�1��x2����a�@m4�%����m�%&�)�\\d�I\$҉\rS��2��#���\"q�C6��M'�Y��&�F�9��a6��cA�@h��'x�l0�Ő�!��8N��d��a��X)��u�<)����)1h)��t2��f�(�N�P�f�vx�Y��ʆ��356	�X���1���!�< �,X�gC�!Y����|�#�o�S��L��N`�-��bߛs[����\n!�;�9��\$��&3L���'���Y�0��	��\r��ߎ�\n,�#�\">�I��A(�C�@��D�.���^qxb�%+��-�؃��zF6\r�x�	㒁	�Z�A���@p*-'����98P�D2�n�Y?R�2�B\n\$:���%*��2�H���<b(�;?�HN�\$3��:)P�ƱK0��/L�\\�s��7O�Í@��2��ܺ9K�O� P�\$Bh�\nb�2�x�6����Y�\"눞�ct.��59�)����\n9O#�*\r�[Bb��#9��pAfL�[?#�H�\r��z��c�s��E,�W�[���(�z��+t�+r�)(:%*��l���<8\r0��ȼ��\\�,���9�k0����-*�;Z�>殌�@�@�\"ַ�+��ۄ⯕�m(�\$\n0ވa�r\n)aK4ע�*2�bbz�hA\0�'�b�\r�	�\$���Em\nC(�:�ٮ�ai��1�P������;'�r��0̠Y��]>=���f�<��o�r1.�L5&���w>,�8�P�')js��e�jߙ.�ʀ�IX�7�+�싪�J�<\"�>��C�d�.�j\n�iwBz�]8�\0��MG��+�j��JF���y1#������6���J�P/\"��{���#O�I���;O��z9h;�`V1��0ftH\$�>��~��-H.M������5�u�(��	�@��	:�zJ�q`m-\0%5��O�v/\0)��V�\r\nGA턼,�`�#�p�� �)�[�oh\$��\\�\0a^�\0���J1�K�8B ��D�~�C�y,���F>�P�ǜ:�v�X��4��(x�G�9s��I�QY��0�W0\n��W�NQu\r��";break;case"pt":$i="E9�j��g:����Q9��7�j���s9�էc)�@e7�&��#\$8�M'cx�T0�L&�DD�<M�\$��)��bb)̅. ��R��2�`&Yq��z4��F��i7M��|~�t2�DC	�:a9˄\0�I��2Nr@QB� 3e�S�@u��5��Z�NtK�*�@��vcMN\\T4ŲfC)��i��c�)�]�C�F�,(�\n\"m����a�:K(�`��AE#.�G2���J�\0���mȷc�r�s�(v\0�����\"�����%��8�}3�_�L4Ѱ�(����(�C����D�C� 7+A j���0��PƄ��JĔ��\0�7�k'�N\"�덣J��e:��#�(Ƭ�#�\"���ұ��+,��R�\$���#r����\nGA�H�!�򳆖��<�!�iE/��ή8@�	�ht)�`P�2�h��c�0��\$�<�du\$�T�?�#j�'��7�i\0@!�b��,�65	h@���*\"3+�h�6\$�ʚ��)З=�D�-O\0����t��-L�ؒ���8lc�#\"ʼ�j �}�\"���ˮ�ʂ����U�\n%�r�Y\r-4S���?^����ͪ,p�!�3\0�s(�}Y̐@(	���Kf\n(R��,��9��rV���)��Sv�&Wܾ������2������h���@0����I�+��\\�\0�7��2�����>������>��\r��/�/è7��䚮�\0P��ݣLS!֚��-!\0�?(�\\,�-�s�#���P�>���-cC:���5h�=��Ko��R�p���f��Cc��,2�S�,8MK�n�͡l\r9}g}��8.���uH#��9���x���7��<��t��Z�u�wawm�kl���wl��\"���#�5\r�L�-�`���r��{���RF9��x,����y��7�@�ko\"��\0�\"�oÓ@e��1t��Zz�ᱽ�Hm�PL\r��xS\n�9;yn,�?�V��1�\n�N�Q�x{��\$�؆����F,��2�dߡo6�E�5�v��\$1+�P��";break;case"sl":$i="S:D��ib#L&�H�N�M�Sh��a6ث�I�� 2N��	��.��MGc,\$�aK\r��Y��t�H��Y0����R�\$�K07@��)���(�OF�x*&i3�b��||�a1M��\0(�e=MES�N�iScI�X :�NV���I3�\r�IE5;(4J4�L����q��P��Ɠ�������&�*�t:�kBI��]���U�	�\n&�c{r9��m2�P��N�6�\n�Y��15��V�d� ��A[Ӝf�r4��B�h�{5E�~��o���N�Z0�\r��'\n� ĕ�L@cR�@P �A#�#+^�A l��8�BK0��Z~9&��)�h��	��:҈�*^��BH���\0P���F	�#����p+)���\r�rL��E�5.�l�\r�������2Ӻ��\nk0LM�2�hZ>9��<� �cH]8L�`�/Mk�ڌ��@���@P�\$Bh�\nb�2�h\\-�T��.ȃ#�9�1��� l0�)��V���Ԉ&O�\$i4�!�b���1+��̉���H9���k��.O��/��V�(����a\0�4�Ȋ�#��~7��z���\\l�'�*J�W���.�j�;*�\"���\nQX,O���cHƓ�H(�¤5<&��2�R��\"=?��3o&��(B�����;\r��h ��h뭸�?oעx�*W�Ԃ��\"�4-i�>0���c[ H��`�9��o�\0004�o\0��˃@-��:1J����8*\r\0;I�H�ɠ�\"�'#���I@�7��\0�i�9���\r�(�V���C��4�u��ĥ�н�����K��C+��U��9�Z~6�|��&:�h�&��4����8Ļx���g�=�(���T������9ά'���^/y�/�L��z�k��%�6cZf5�Ɇ�����A�]��'�#we�[�ƛ«��t������c{0�@6���\$����ل�M�\"(v�\"+ŀ����K�p?\$�uӴ�a�A�9���eV�F�Ŧ���ֱ+P�Ȑ'�~��s'�7\$s�K��(0�7��Saqe�#\0�~J�g���\"\nNJ�\naa�������	dd�\"�t�\r�6(�P��0a���+���!!�Iqi��^G��";break;case"lt":$i="T4��FH�N2�'cɬ� b+�fSa�� 3A\r��p(�a5��&�	��s�F��Cɐ�(��2t�0�\r�S)��/:M�v��P���(�r4��&�,��K���)��4�Vq�\0(�%1SI������-ƳM|@v4�X�Q�B 8+cu�g29ͧ����A��AEc	��o�؄hQ�S5�)T���t0�NU�&��\n*d:�y�e5u9~¦k6U��Sy�uP�g�p:DR2�\$z��'������b����yB�\"5M�{�Bs�;I�sO��#�Zν����P��p�5��\"^�\$��z��Һ� L �:		A�x�C��׍�x!hH���\$��B�/��99�ҡ.bG5�ʀ�i#^ ����5�(�0\n�� � ����F!\\��/j��ǳ�J��,Lzr�A�\n���L�P���65�z	8�s��<M�rĎ�KLh\$	К&�B��c�\$<��h�6�� �)��C��3�\$�\$\"�\"��0�z+\nc(�ۼ�;u�O\\�!�b��͍蚨Ą�7%���?\"�6��EL⫰;�մ,����F)V�4������\0ܡ	2ٌK?���7\rc̄��h��mY(���'(�Z�Y�,6\r*�A�:��I�2^��V5¿\\K`ԎVJ���x}���u:�<�Br��0,ӂ���R���º��{Z�B��(0/3ABf���\\:C��\nx�*i�A���<-��p��C4�6H�@ʭ2j\\�H��@�\r�2�m c��sP�y/lB;-?�Z�\"�m��-��P�\"j�,��h�ܣ��qn��3��M�?��#x�\r]��¸3���@:���:\r;P1+�����|�3���T͘���9L��6�q_��xCKV�˖M�抒3ڐV����p���q3�'�9�L��{�_��p���\"��XǂcX@7���IC��2��f��K�t#�����\"DȩECu�xE�q�����x\"GHA\$���67\0��I\\+�Q�������\nk���@fñ�4'<<��HA�yX:A������� %!�	�*[U�j��*�2�xָ\n\n\$0�zB�7��\r��&�\0i����!���h�*7�S��)��5���`�P	dn+\$�B\nzP	!�D9C^�s�k�t�B��σ�e��vK���K3�\"�p��";break;case"tr":$i="E6�M�	�i=�DCy��a�kcq��r4��ɼ�.1�����`fHl<@b7�N�C����X��)��Js!H!�聴�v1��f\"~3 �1S���0�EC	��oGMr.2\n%�M��	�?OVӤ��<��-��L`�i�V���-�\\Β�%�t�Zmv���zta�Q��(�a<݌'*ތ�h�D3m��z3�d+\\d�\n �ADs)��tΓ\r'<^r�=J�G�I�o��eg\0����l��M5 Q\nU�4n�لY��t��x�9��a)�_�:~�s϶�2��B�A l�����4\r&N1/�\n.�3�ڲ�&��v��46��,%��:<�:&���R����\0֍F�4\\�\"�#�2�1Z �G�@�2\r!s��(��HS�!���3\$\$\n��6��� t9�`P�<�Ⱥ�#Z3��Q�C�Zp�\n�Bm�P��3è�:�-������@b��#!\0�\0F�p@##�jjōpp䰺�b@!*�F�DH�%:����0��Ȝ\$zh9�j�2��*��@\r�뵣bqY���o\\����^0	d�:��\0�̎�3NSȋ��U��\rCBTB��c`ұ�B��7<u\0օה�471���(J�T:%+�,��	�#BP�0Ʃ\nR��\r��7�i{2<�8��'�b�R� ֪N�9�\0¹����/I��!��0�\"���#��A�F0�}��Y��Ƚe���]H���i2z\$^\r�ʵ�Rơ����i���6B^�y\$�ޚ�)8@7,�0;%9�@:,��1{�!�Ŋ�ˤ2v�'5*^�7Dc(��\"ð�]@<Ďo|aX�<��c^�`�;��q�(���P�=a��?�J6+��.ƿ5B�6oo���{��=�y=hb�#֝<����W�r�~�NX���@�+�\0�>%*4�2qq�O\r��ԩuȽ����w׶�I[�#f�1�a0���E�g���Nd�:���KQ<�e{��:i a< ��������x��u�'	a�8�k�5�#f�<�ϐ��vZ��?4������V�q�Wj���";break;case"ro":$i="Ed&N����e1�Nc�Q8� 0�`�S�P@�W�lD��a�0I��u6AL����&��4̖O)6�O����m��)̟1 �d)\$�@n��gg3�rbg7�F��i7kL4q�@b0��IY��t��%�Sq�@t0����,�X\n&O-\0�\r��e�VM�9n	t��S��8t7�`��J�n�A(��6n ��(UU1*NH%�'6mY��4떎������<�֙	�LQ+���&;��8Y��QH��M�L �9��m2�+��\rSE2w��G?ni��뀢�j��+��0x��%c�L���*�,�\0����p�:���؁�((¯�� J2{��1K�H<���A j��p�B8�A\nں�-�P��/��� ���@�����\nz�3��9\r�pҍ�nV6<b���T����Ҧ�2V�)K���Ɍ@���k�Ԟ!H�p�̠�p ��5�ψRWQ*��\r)��߁B@�	�ht)�`P�2�h�c�d<��R\0��Ҝ�+P\$69H�rM�b�����\\9X�1?p@�Ps�\0ʌ*DZΤ��Ƈ�c��1�)���.��V��꒥�2E����9	BY�7JՏ������3�\$�3��@�=6��,:�(s��6ȣ��-��X0���43�p@3����d��:<3�c�e���4�/�\r1!1._���\$-�0P��)���#U�(	☩����@�ѡ\0�J��r�6ql�-�X�j��m�N��6%#������\r){D9�0��������r��9y_2��T�P\n�.��ϗ��mo�(��%�,����ύyf�\n���P�:0�@4)z�7���ÎvC&8-�p�4(+�ľ\\�_9H�s�^�N6京�2�PC�)�S�@�k�cA;z[�ð���6��D���?aL���H����+�#ě;0�z�`+f�1��Tσ�bQ�%5�w(��i~kd\"��\0�\"�E�:(�=\r��\r��V*Cȉ\"�ؖ���\0O�fyE�=��Kb�F)����ЋQpV�NM��D�ߌ��o��o��3@6.�@0�\\~dpa�bQ�%p���)D��Ed\\�9��E��O�.�=F��J�lL/MV�t+I!��\0˹yJ�^M2�\r��>R1�H ";break;case"id":$i="A7\"Ʉ�i7����A8N�i��g:���@��e9�'1p(�e9�NQ���0���I�\"70#dp@%���'C�O!����4��e6�gSY��o����#I�a6B�3�>l�ѣ�3(��LAD�Q�� ��3�L�;):DSYΞn�O�im\$�u�Gl�RTZ� 8E���l\0�\"�Lsv|�@w�`AE3�r�B�HD�T\"7	#�M�]i�D0��� Q�C�����c�du.�N�9f1n)�{�nvjsO9A�� ����O2�Q��\nE�A��jm�㢉�8# P�9�\"&\r#j�� +۔4��H�Վ��ʰ�\n�81\rL#V��#�p	�(��.B[��Op@���bX9\r	0�����1�q�q�8�h�또	�ht)�`P�<˃Ⱥ��hZ2�P���T/���\r�kV�͐�7�h�@!�b��!����e!�z��ڣ�J2A%G���4�-�����P4����#H̒�t�B0�C�Y��\nǡ���4��\n�Pu��(�°�J���I\0�2��m��\"�H�\$\n	�d㌔�d(J��!�E�f���\nx�*Y#�{K��M#CC�A7 h���;���3K�:���0Ҍ=,J�a;��I���:�b.P#�� �߯\rp%�j�&6�:,K#��1b���G��@�3\n���=x:\r�H�7�S֗��`�TB(�)�2��(�Y���6��*�e	�\n�'�C�q�ދ;�C2��#BJ!��`V1�#�'A~:�(7��0�@�,l16�\r'���j����\n7\"��إU���刨��\"�?-˂q�A�7AD�ʖ����b:7V5�����=Sٵe��X7�m����p�K7�4��ҋ+\n�vx��:�\0���K�s�;C�\\l�/p9�";break;case"ru":$i="�I4Qb�\r��h-Z(KA{��	�L�h,�����h�\r�e����d��E!�!\$˘܍{� a0�<�\0.�'\$˨�����.�0�As�F���R\"7����	4��\n@Lfq���@%9��\r;'�أSH��m��Z(�܁�B�V�����Kd[|b�N�\$�k�U��V M-��Ʋ��j� �+���F���,%��b���ґ��2�]�_e��2����s��Z[Z���E�Ic]Śkā{���Xu��������W��l���EsS�(���I(���X��n��h��B١�	t�?�낖��b���/\\���b\$I��\n�?PI�P�o�u��@�������k��؍�i+�\0>q�LO�ly {|�Ŧ�<��)�䐯1���M����H�~�J�*4�1M��\"#����!�|�Č��C# PJ22i�\\����\0ϓ���O�#(�\r�x�pH�A�%4EQ�\$Y\$jQA���G��7�)���ڌ�%�\"�J	�S \r{��Ej���uTR��\n%'�F�5P��s�!��O����7[4����t�:��1\"���<����{m.3�S2�jA|&�έ]7�����AL�������]o^\0�^�ςS2ڀ�֐�d@��N\n9�E\n\$��r������Y���]�9�]��`�9Ckz�K���0���#��؆)�B3@���z\$vFwhϚ���F�&�\"�*KZ���J���Vd�!�3I,L�	x��qB�'N�p��k�2l�;m��\n�H�a\\�Z���0��ꆗAbl�;��\$��R���p���r��7jMh�-�W��s�JZ:�+:{�R�H��֊3�b@�*�� �����7￱�b�Ѫ.k�&�o��G^�1�;�����[8@S���j��S��**�E���S�@'�0�Nr+&q�&u�U�\"ZTe]�b�[̈́KnJ�:Q��*!��,Q�\0Dd����Cɑ�%}�C���#=�!��@Ω䙂�DJ����!�4�H���b\n%�(��C�_���,�ԘB.hDi���|Uc�%č1/60S�\0Y\r�����( Q��8 ��Hl��E\0��\0u�0�H�@ir0�)���`�4�u�&�t�p��YJ�+�E�Xx��r�EfM��F�^k\$����d����_e�2���v^Q�\"�0��eq���3ȸ��-��\"�p��q\\�42���ln\$� ���[i%&���!�#��7�����&�+��g#r�{	JLXO�y�4��_\"a�Ё\0�R5`t=��E(:��*��g��^�FO�r���4�G�}\n�(��Vٖ��<�?Q�!�\ny���Fuʒaڟ�J{��}E?(�6�Lx�M�<���z0%o��.\$~�/b��rp\$m�*�,Ӟ�ta�D��N�\rrJ��M(/�tX(9J�e��-@��C i\r������Cxr�20:6xb:*m�*\\D�Y��ԕ)��|Q	���B�W�F���Er.�(�4�)-���A`��\"��%TUW(��b";break;case"uk":$i="�I4�ɠ�h-`��&�K�M�9x�_4��\n��-�\\�z�AH�P)D@�BJ�1�tM9*]4P1輑v�FC#E�b�AΥ���^����(�%�A����d�9�@%9�3V��e�CV����IJY!�7'���w6�G-]Q����V=��d��\r@��&�)M<�X�V��F��ZP �����A0m\rҤ��Jc+,��[k�QmR�M���T�W����f��*ӹ=�Ȣ�B z���`��g�ٴ<BS�'zH�R���K��X��UE��<�^��[�KdַXTm`��hr2��d���B��N��h=�R��'-����N�^ػK���������b&Q��l���\nH^���qb^��n��G0�����N�t�6)R���Z�;�kN�\"�+i@(�i�i+�Lĵ��h�\"i;��pH�A�@��t��\$@��CN����.�@�[���&�)\"h\n�̪Q��h�0�#e���.�j2:٨Ӛ\"���#0�I��{���P{=;TkMd��r2�,A��8�\"��\$�J���*H�ו���X�R��lm�Y6]p��ӽ��Zj��k6�\r���Hy�\$L�\"h��I�F�K}_0YB����]v�p��@�F��]aG3Җ�HȀ6�����H69�O�܆���)�MJ��r��곀���1��Jj���(Kz��%�OI��նٚ]zF�ov\$�ĺ	t#�:!)���H4I�\"��-�M�I��<�)DcS���oZ-�;R�>����Zk�����ֆ�D��(��W��(�ko�\nܩZ,���~��1�0ժp[���(��<�6�\0S���u;-~t�����G�m޿N�BԲS�5d�h�R:�>1R��1��^u\"x�*O0����q�OЩ<㚴J7�h�h#p\$L����m��IT�X��!�T�3�A�'&%0Y��\"4Lym�1 �&���ѫ|Ki�BH��1��\$�XF �:�,�hvQ�� �!�4 j<����#��9L\"Ț���A\0h!�2�\0��\0pA�;)���(s�(P�t���4��b\r��\n�8C�j,S�z7���K���u�|���`���7�\$��\$���w nV�5T��9�)0�A�Y��#HU0��ʰ�*'Ku[ɦ�'4�K��)H��:���jJ�*��5ld6����fo��X\$w!:fg��M�h��əT\"�����-(gx���l�\$4K�ED��d��X(p�;8��;��N��7S��W�Q�.�2Fޙh�=�Hbc�(�@�)�\$�si�!g��N�9F1\0�(u\rsN���ۿ��N�b�kI\$h��13e�ϑb�I���{RIhY��(�2J	Jx�Y��b� Ur�(��`o!�4���T*�R\r��9D���n&�u�P�(C���U%Man�ըhSI�4:V�LT'(vt�� ���Г��):�T\$!Sk�O�2��12�A�";break;case"sr":$i="�J4��4P-Ak	@��6�\r��h/`��SAC�4SP�\"�C\r_C!�Ԓ3h�\$�XSA+�/����d��4Sp)+A|�[�(�̮5�N&x�>���Ja�Yd�e��S���*�Kj�|���L`�E�^H�������'U���Z�\rX45%��YDabK���0�A��4����Kr�T�I[���lJ�	GZA)�\\EGjXl��Ʒ]�P�(\$�S��̗L��I�i*��F��G�.0wnLwy��4x\"��\\^C��)Z�i��V#��A9�h-�QԜ����d�����F�\$�\$�+;*�����h�j2ϽF����+�4�#���10�ֻ+	���D�Th'��FNJ��\n�h�F�X���(Ȃ1qj��B|�d��I�Cl�������\\r�b�D��!�oܨ�'(\$ғ��.���k�!��4�H%����E�d��,[�����\n8�9(#��V�\$(�r�AO���1+��DѠO��\n��I��.�	�UQ�B䶸ɪޠAt�F��b\\�u}kX�hY^V�1k]U5�_*�G-\rJ]Z��2t&�Ih	@t&��Ц)�C �\r�h\\-�7��.���J����uxլ�l�6��:���J+�����\0�)�B3BΖ�|� ��`�:�ʢ_!\$\$(�\"�\$���#�#l�3��p����(�@�5����c�j�4�N��#�\":BaZ�lߥ��X��1N?b���鑬����N����\n���\"��`\r����I5�{W����Z��\0�\$\n\n.�\\o^��m����#��3��(	☩���e_�Ŗ��SJ�F��<\\��Cl���(R�\\�L���b�9zh���w��� �w/r�8M��=z��V}��X�h���������ӆ�����-K�����}�	{�hnJB��,��@v��7�@�i��6P�C� �:�\0�C���4��C\rz�C� LX<\$���\r�%*���L�4��HR�aZ-���\0��D�\0mHu}��*dUBGG\ry����IJ|��]Ĳ������)��L�L<�U��i��C`����_��.8'��;��A#�~.�A���++����Ȕ�Z�L>)�ث\"�F��.BF�K�IGge]�R��M�P�����Rcڢ(�Q���h�ԋ�G���S2BQH�M=�v��k�%qԷ�g΀���#�b ��F�d<Ñ��M6=\$PRk�xċɲUd�<KX���@��~?��v�a�rfy҉�^x�S3�OC9��#!5��,H�k(ջ�=k���A5&��Ar 꼲l";break;case"zh":$i="�^��s�\\�r����|�\\#]5�A�^(�d;�v�q�@�2q\0�RB�B�p�M!#q���N�X#��\0��B�G#�h�5ʭL9S���Ω]�����N��,�2TK�CL����B�Z�T !����(��+��m�пL�I�2%R�X�b\nق ��*����6�4[9V�*=&���*ȅ��b�r��d���%ԲT��.�t�֕%j]άSDP��2�r���:�\"�]�*Hu*�M����I��\\�ĳ�|�r�{V�����+��u���/R���ǔ@��?�oL]�GIB\\���W�PJ2\r9�E\$c��9�Cp���\\p�j���Z:��vs��zF��rHGG)tG�GI2H �ҤE�t�I�E�.!(Z���A�HN��AU!��vt�D�HG�\$)K�,2>�䌀�Api`@�rjjɜ�,���2�	@t&��Ц)�B��A�\"�\\6��p�2\$��Pt��T�!H�!`s�p�:P*�E/\n��#D�b��#�Hs�\$b�t��k�8��X���i*��u @3q�O���4���)~B�E��QhI^��%�W٬��C��c|�V��,X?O�~�ԍ!r��m0WX\nҸ���\n����(W���b\n@�_�G��zD'�a�%Rl���x�*a\r-��zpH�כ6�)�Q�)P'��@t��az��(�vRb��PF�\$\\���谲E��M��������sK�,����j�����+Ւ�,��@4#��B�\0�9\r#��6�<&�x@:� �:mc��4�C��1n�s�f�[*r�%��S�#��<r��ڤ�R�[ĺ�2RAPc� �y.���br�dk!Ӄ`V1��H�5�x�!\0�0����\r�x�4���@4��TӰ�')^^j�-���e�'!�+,������(њ�B�gAJ���@��Z�Tk���\$���ƭ(?Q\\9���|Ô@��H�:�����AaA07���<��1�&�ߜ1\$+~��&9���j�,t��z^��*/i�%�R�Ƀȅ�&J�K#�l*Y����!Tx�\0";break;case"zh-tw":$i="�^��%ӕ\\�r�����|�B(\\�4��p�r��neRQ̡D8� S�\n�t*.t�9�E�N��AʤS�V�:	t%9��R��\",�r�ST�����Tr}ʧE��I'2q�Y���dˡB��I��B�=)@��:R��U��wUDY�D%��h��,�r�b)��e7�&�p��i��h�U�ʓK��/wgB\n�P����˙*����iu-u>�L��)d��Z�s��e��t�t�3ȅ�=l�t-��U��\0���l��:�P�^+ܩ�s�p�t&a�UzSs�Wre-\r`�r.P��걖)v]%\n���A|F0�)� @1,xP9� P�2�`P�7�A b��H�d�8�+'!v]��!��9zW(dq\$r�Dx�&�:JE���9�%��I���6�����A��s�r�1�C�K�p]�b�G�o�~L���L��L�O��@,�\$�2��]����G��b�\$	К&�B��c�<��p�6�� �5�d9u\$IRb��,�P�:K�x]+�Cȇ�-q��\0�)�B0@:\r�[ ��Y�C���7;g),WOϑ�M�BlE���2L�@r��9@DVr����iZ��+8\$	�!�e{_�\$�`�>��ZJ��i�C'AZD�2���!�Z\$�)�T'9jB+J�n��J�1ZV��(`�N���a�!�F\nx�*��L��RnS�'1pM�W�Ù٤�JB��TE��V	IZ�!\n�0t%�\n��et�n��AT��+:se�����18cS)K�k,�V��#�,�c0,��@4#��C�\0�9\r#��6�<9[��\0�8�[�N�:#\$�#<�.E�:Ϣ�1�\\��;��<���u�M����ī,�L�0�y�kD{D@%�bt���0!ԃ`V1��H�5�����:�u�@6�� �3!\0�:t��8'Du�ը��N��������w��g).��.'@�:f�T;�rE	`CA~+���39 �.}1��_0n�*B��Ó�r�p���\0� ���t\nG�(��%��MD#ę�2,��U�dT�c�,���BC\\.�u��)��";break;case"ja":$i="�W'�\nc���/�ɘ2-޼O��h4����)\"j��J,����p��&���`�x26MŒ`�2q\0�RK\"�h�\n4�� �����@%9��S���W�U��*qQ� aH�\nf�T��NT*�����Ѹ4��\"��ɓ�\0�N�BЪO�����(�� P�d�Z܋�+�ȵ�x�s*`H5�w��(��h2>��EqTs�.+M�[(�2^@�UԪ�j��3K� �%��\0�s��.T�.h�XT��D��̙�9��~��Ӊ�)�\$��.AȐh���҂��bH%�YU�z�j�g;��(�����4D~�=��H�Y#\0=�ID�i1X)ŚhX9l�L[p��P�bA��I@B���\\Ȱd��D	�lr��tfA��,\\A(�<*t<��h�7�A b�����!8s��]�g1G�l���dAm.�JƠQ�@�1���V���q�C�G!t�(\$��a~���n]���0����=�\$r��#�3:�IS4�:ޫUB\"s��򪫐,���.�t����S�@P�<�Ⱥ\r�h\\2��-\$��p<�C`�9>j����s�Ub��#@O{�.��C�-8� �Jӵ(4�Yh�-g�e�B��tY���r�POz�-!�-A�_d���2'�V)�>t�\$���H*�~Cp���F%�b��o\\�߱\\<ɲ��2ͳ���K�R�+�P�\$\n���3���!�B���Z65��DA�j�^�bQ2���b��)�����6i�X@��\n@���۹Zm��E�:r��U�!� @�m`@��?����!����9E�fAG)Ed�� ��(�]FXI6Z;P�WUH��_�a4UTu�5V[�I6C/h\"ۣ�+��#x�\r�2�x@8CH�4��(�&������0����4\r#��0�_\\���u�J�d���\"O���:��a����wR��C���ڼpָla�6���\0o\r��0�\0�C`u}Ϝ6���C0y�:?t���S�e�N�c��؁\"e�3�����uN�̴��9�#�y�x��%��/�v;+�!dX�\$ޑ	���ԼCr#\0PL\r����c�G����>��K��Ha<'��\$ɝb��������\$�:�@�̈́���m�le���A�d��1�1-�\nh��";break;case"ta":$i="�W* �i��F�\\Hd_�����+�Qh:.\0���U�z A\0�����V�X�`��B N�y��)�����4:d���(2�|�j�Z��yl�]W%c��<�]W*f�,IR���T��5�@t��� ��Ux�=#����	}VEUD_*z,�6���Ӂ��)�YhT�6fm�g��M���U؊���)E@�:�&?O�ߣ��qt�Phx�̊�v����_��9�F�<�㙤�n�@6�=�n�h�j���v>%!�zo�I�����?b��@�K[���+\\����\"�!\n	j��\$B,��HB�G \r+�\n\$-�\\� j	\\��-TJ@�j��%NZ��������zn\nc��4��;0�\$�R����1�D��%t�=1���:N��3���2��h�2����L��52���ɯLP�5J��I��o��4�\"F��2�Q�����삭�dҬE�{f�ыDj�Ŏ4�@�#��|%,?���LOr�+���M��26��a �Q\r^���,��\nIO�@My_4�3T�M�Z#\n�#��9�Cp���^v�cE�u��ʎ�S*B���s��K����+ȥ��ƕ���FLb,���'��E�(���+������u�53WD�{����\$�mX�]O��7��5����?WNL9�b/vP�Vm�(�Z#��Q�\"�(9n+��R�����u�^�n�j��	u4�X�������j�\"�B������Q]G���\$Bh�\nb�2�x�6����\"��}A3<>�.�� ѿ�B����V�%�\r��槖�}��D1�\0;P��)�B2��/򎣪�X�*w.�_J����7�N���3���v��N�\rt�R��ĩc+�Quڊ`�O�΋r��~��sJ�Jf�1N\0[�+\\Ʒ׭B��d!q��ظqi|4�YOþ|��̹A-\\��*����-	�o4G���;�d����V*�\"*��#\$��+6�I]1��\"����Y�-��L��8 �2����!�u������H\n�.�6���vG���\n�<0�R����ҧ,4��0xS\n����!���>�գ�Pq\n�c4�\r\\9])��d��9�2 �1���C8uA�:�� iA�1��9\"�{��������i�[����p��Zhg���Y@�ռ�+����``c�?��Y���%ruj��?@�PN�m��\rĮ9tDe�Ɨұ�-���ʄ,\r��3Tk\0PY\r��������`�(gY��:�@N�\$���4��=b��n�����}_�YM˂�M#S�8�^a�)��X�I�q��p��cI�e���\"�Қ��3O���hi���T���Ly�ÁfG�W�b[e�3�E�G*��������{4e�[eoJL����I���p���`+a�4�0��  �;�g���7��A\0i�^�������3}��Q��g1̠oA�e�Ê���Y�����\n�PYh����J�)�Ņ��\$؛c\\u��R��5���鞵�N\r�H2n]��b�-�>'H�I�M��%b�D�c�a�9i�X�\\{l�`��ʡR7\nA�6H��/�K���z_	%(v�U�Ur;bMֱ�?h2�Y�<v�ܺS�3�������i�S��Wٵ`,��F�j�՘�a=�(�a��b�����+1V�d�M�ה�\\L�#+;s!��ʠ�}V����x{'(��%cZP�b�c��NQ�V��c�V���kuk�\r���r�e!��W�qͩ1�]��.�+_#";break;case"bn":$i="�S)\nt]\0_� 	XD)L��@�4l5���P\\}\0C�P�4U\"���\nt1L��C�h�[\0VC�1i��7Câ\nh��ISL���dz\0��%a�XB	4Sʔ�h�H\$S*r�B�N�2��`�٥\n{:�[)���5<V]�P�*5!-eYB){�`��)�p\n<.��'�jjj�c��d8Qe\"oaS-�Ԋn5L��@'z��##ZTC��e6j���k�Y���M�Z�����9��ݷ�\n˃�h)z��7?���JdL9������2��JA@0��r���F�z���;�S�zz�/�{>�5�b���JB���Ě\0�;��\\J�;��P[�_��B�կj����\n� �,�*��8�{��ZʥB�;}'�\n�Ĕĺć��qJ�G�\0�H�3�TBL���\r�<�5Rk��/��\"q�n�E�����#���L�7��S\0�o�L\\�C��9�Cp���\\�8b�2��8�6����*J{%���<��S\$�	���'�T.��z0�/����\0E�J��:�Y)\\jȐ�l�Ԡd�7=R*�;*N�D���,RL��)&Nr:�a\0P�HʹM\"�L�j,���T�#���Ӕ�m3v�\"��sZmE�O+7d�F�Fʔ��L��@�	�ht)�`P�\r�p�5c�P�!�J� 4�SW�loՒ�^��t��:T܀�4����9�9���)��/`4*2��'�rI�1�=�k:�D�� �?\0[q[B�7.����B���\r-<)rVa��0J1.��}���+��<[:%t�(u���)L�L�<��`wz�ov��_���K�ě�I��ǖ,h�:�IJmXV�;��:��.;T�t��@(	���m���uI�����P�ߏn�/n�j?F�F\\I̵�����)��w�����������ؖ0��J��e�P纨k)f�Fޡ�긍E�o2D���g�iYXH-.��:��pK�4�j�j{tM��;_'��@��X�Q�[f&��:�\0��2Z�	z�5�R��z/�S�E��adle�7�T��!�>��'t�\"Q�(�d7�P@v��A\0��Hv\r!�2�t��o�8@�\"�t\r���@��!nY�0��T)�Ǐ��?�8��Z?�ݮĂ��r�.+�v�B��׏gnB6�&Ԍy�e��S��6�O1U)m,AS����=q@��8�Mt\$\\�ǳ�dedC��\06hXc\r��1��@�p  �;�c�j\r��2��A\0ib�ay�2��	^��<�'�Y��+R�G��0aq>l�ɣKB��T����w�)����%�>���>��H�0|�?��2�mT.�qL�\$�Sr5�\"ؔ�ۓl�ԥ�R2z�%�%�	��@F%6UH��,�z+�ٮM1%UD()��=*F���f�\$<1yP\rb���\\�3�%.ND@'��;s��Ód�`o3t7z�Z�t�Qn7Gj]P����a}����s7!��%��'�0��^ĲS7EҒ>J4�Hz%c�ŀmtM��=Yi{��Ĭ�";break;case"ar":$i="�C�P���l*�\r�,&\n�A���*�.�(�����Eб�u��l.c�N.6��d2W.�����aj�D��(�\0��B�6\$�\n3���h��f���I�Q���cK�Ϥ(���UU��(\"�%J�@����̺l*n�������\"�44.P�����[����D��,2S��*���I��gQz�֯YCZ�W��T�Wd���5�ó+��D�\\g����[�`�\n�=mMP�6��DB���\"w��ej���|l�c��ҜY,����ʢ�c��MQP)�M\\��Oª��k{�D?��Ę�Aj��ez�W�)�P��)��̺�����!P�#� �2�`P�7�A j���`�1fU��\n6��J���Ϻ����Bb��x��,cc\"+o�X�\$��^�1(s胣l��f��)�*�:l�C/%�C6�\$��<���<6�>鱱:��Z�����T�9E/�@t&��Ц)�CP���h^-�4��.�O�7�\r��A��l���䀭����67-�3	6b�)�\0�7�c(܂VF�nl�t|«LB\\�,%��=�-c(ƭ(kv��(kV�9+�BA� �+L��ż���46�Ύj�C�7c��e��LLJ��ҺO\\��\0+)Ah�\$���>��׳z4�#�\"���̶0��(P�4���E����J�\"w,�%�uX\nx�*!h�R�C0��c;��F���r8Z���jB�Ofr�M�z��꒡d�Vo�����3\r�?�R����()6��l	ԧ����=5�\r?��X�z�����X��[ԅ�@�*΄�Kt�y9ɢ`,��@4#��Ea\0�9\r#��6�<P�x@:� �:tc��4�}��1u�IZ�2e�7�����>��r*�P\\y3ۛ4�\nv״+#ԙT�����������O逆:C`V1��H�5�}~0�����vA�7�@��� \r!Ф��X\r�~Xdx�-B�y٫�(��l�V6�\r	#\$g�­��!�r�ǽ��A�k�9p�b@OL��=f\0����� E�@DB�3�BK��7B\0|��d[��\r�P<�}@A�z`o07pc ���ѻ`�H�J���u�i~�	ĳд\rtZd��Ȋ�ΏR��.P�¹�����-���";break;case"fa":$i="�B����6P텛aT�F6��)��l)�M������G���j&��,[(�J3+l�!(i\\25W��S�\n<����(6®9�!�-����.�\"�1j��d�D6���Ζ���\n�z!b�-f6z�J�kFBk5�ʾ��X'\"�?/CZ&ʪ|�_\n�! XU8� �T�)�J�o�a�j|�2!G�Fixu�H���#Jl��y|�D&0�-r�]�CUV�=r4�d%7��	sK��o9�u�=M��lV��	�ذ�Z�B��Td1�\$Mg�DwP��Y��g\"+I4r-J�!a4K�V�i�\0��:@����T��KDϰ���W��ԗ�!D�8�(ȑ#0�D�#(�\r�x!hH�A��V0jҰ�!e����H��T�,;�(�%,E�����\0Ҭ��P�2��FB8R,���J�нl��ګ%��\\�M	Y.6J̼�H.��TI��d�OK*<��?@PT\r��m��D-hD �P�\$Bh�\nb�-�5(�.��h���\"ĲAj�x�H�̌�1��6,Hmc�#�\"�h�r������0\"\\�T�Z\n�x�2��\0�)�B2�f6�y���R=[,e�K	��:�%�f7�bHY+ά���,V���3�]�U�2�}ڤ�8[\n�!k�bŪR�f#�r���Ԛ�v�-�K�X�:����#�؏����ʽ��n\"u�����w��9��g��7c<�*�Y�l��'�J=\"����l(\n�%�3L�����\"��2mՓ�GZ��?�ai��Ü���1�#�{B��l�`�,	�{(Ir�~�kvې�t �'��`��nL��1c|M;Jnܚo�]<���P�z�#��l�.�+���#x�\r�2�h@8CH�4��(������0����4\r#��0�^�,o���Ӯ�2k����ϖ�Q���Օ9D�ؠq��E�ܪ	\"�J5��Q.1��G��tA��0�Ck�l�@�l�9���Hf �4�G��h�(��\$�M�Q����sh	�J��ӑ�pv͚d=D9\n����_I�)�`��3Nb���^�\$��s \\�\"&p�@E���A�hչ���Mʃ�H�	��v���ڰ,��_\nO�L\r�����|x9;��\n<|ey���C��>�!�H��]8E�L��*]�X@�McC�ޟP��t��<:8��\rIY ";break;}$ke=array();foreach(explode("\n",lzw_decompress($i))as$X)$ke[]=(strpos($X,"\t")?explode("\t",$X):$X);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){global$c;$kd=array_search("",$c->operators);if($kd!==false)unset($c->operators[$kd]);}function
dsn($gb,$V,$F,$xb='auth_error'){set_exception_handler($xb);parent::__construct($gb,$V,$F);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($H,$qe=false){$I=parent::query($H);$this->error="";if(!$I){$tb=$this->errorInfo();$this->error=$tb[2];return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I)$I=$this->_result;if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$p=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$p];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$eb=array();$eb["sqlite"]="SQLite 3";$eb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$ld=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite"])?"sqlite3":"sqlite")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($Eb){$this->_link=new
SQLite3($Eb);$Be=$this->_link->version();$this->server_info=$Be["versionString"];}function
query($H){$I=@$this->_link->query($H);$this->error="";if(!$I){$this->error=$this->_link->lastErrorMsg();return
false;}elseif($I->numColumns())return
new
Min_Result($I);$this->affected_rows=$this->_link->changes();return
true;}function
quote($P){return(is_utf8($P)?"'".$this->_link->escapeString($P)."'":"x'".reset(unpack('H*',$P))."'");}function
store_result(){return$this->_result;}function
result($H,$p=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetchArray();return$K[$p];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$g=$this->_offset++;$U=$this->_result->columnType($g);return(object)array("name"=>$this->_result->columnName($g),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($Eb){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Eb);}function
query($H,$qe=false){$Jc=($qe?"unbufferedQuery":"query");$I=@$this->_link->$Jc($H,SQLITE_BOTH,$o);$this->error="";if(!$I){$this->error=$o;return
false;}elseif($I===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($I);}function
quote($P){return"'".sqlite_escape_string($P)."'";}function
store_result(){return$this->_result;}function
result($H,$p=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetch();return$K[$p];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;if(method_exists($I,'numRows'))$this->num_rows=$I->numRows();}function
fetch_assoc(){$K=$this->_result->fetch(SQLITE_ASSOC);if(!$K)return
false;$J=array();foreach($K
as$y=>$X)$J[($y[0]=='"'?idf_unescape($y):$y)]=$X;return$J;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$C=$this->_result->fieldName($this->_offset++);$G='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($G\\.)?$G\$~",$C,$A)){$Q=($A[3]!=""?$A[3]:idf_unescape($A[2]));$C=($A[5]!=""?$A[5]:idf_unescape($A[4]));}return(object)array("name"=>$C,"orgname"=>$C,"orgtable"=>$Q,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($Eb){$this->dsn(DRIVER.":$Eb","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($Eb){if(is_readable($Eb)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\\\]|:)",$Eb)?$Eb:dirname($_SERVER["SCRIPT_FILENAME"])."/$Eb")." AS a")){$this->Min_SQLite($Eb);return
true;}return
false;}function
multi_query($H){return$this->_result=$this->query($H);}function
next_result(){return
false;}}}function
idf_escape($v){return'"'.str_replace('"','""',$v).'"';}function
table($v){return
idf_escape($v);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($H,$Z,$z,$Pc=0,$Id=" "){return" $H$Z".($z!==null?$Id."LIMIT $z".($Pc?" OFFSET $Pc":""):"");}function
limit1($H,$Z){global$j;return($j->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($H,$Z,1):" $H$Z");}function
db_collation($n,$Ka){global$j;return$j->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($m){return
array();}function
table_status($C=""){global$j;$J=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($C!=""?" AND name = ".q($C):""))as$K){$K["Oid"]="t";$K["Auto_increment"]="";$K["Rows"]=$j->result("SELECT COUNT(*) FROM ".idf_escape($K["Name"]));$J[$K["Name"]]=$K;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$K)$J[$K["name"]]["Auto_increment"]=$K["seq"];return($C!=""?$J[$C]:$J);}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){global$j;return!$j->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($Q){$J=array();foreach(get_rows("PRAGMA table_info(".table($Q).")")as$K){$U=strtolower($K["type"]);$Wa=$K["dflt_value"];$J[$K["name"]]=array("field"=>$K["name"],"type"=>(eregi("int",$U)?"integer":(eregi("char|clob|text",$U)?"text":(eregi("blob",$U)?"blob":(eregi("real|floa|doub",$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(ereg("'(.*)'",$Wa,$A)?str_replace("''","'",$A[1]):($Wa=="NULL"?null:$Wa)),"null"=>!$K["notnull"],"auto_increment"=>eregi('^integer$',$U)&&$K["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$K["pk"],);}return$J;}function
indexes($Q,$k=null){$J=array();$md=array();foreach(fields($Q)as$p){if($p["primary"])$md[]=$p["field"];}if($md)$J[""]=array("type"=>"PRIMARY","columns"=>$md,"lengths"=>array());foreach(get_rows("PRAGMA index_list(".table($Q).")")as$K){if(!ereg("^sqlite_",$K["name"])){$J[$K["name"]]["type"]=($K["unique"]?"UNIQUE":"INDEX");$J[$K["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($K["name"]).")")as$Bd)$J[$K["name"]]["columns"][]=$Bd["name"];}}return$J;}function
foreign_keys($Q){$J=array();foreach(get_rows("PRAGMA foreign_key_list(".table($Q).")")as$K){$r=&$J[$K["id"]];if(!$r)$r=$K;$r["source"][]=$K["from"];$r["target"][]=$K["to"];}return$J;}function
view($C){global$j;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$j->result("SELECT sql FROM sqlite_master WHERE name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($n){return
false;}function
error(){global$j;return
h($j->error);}function
exact_value($X){return
q($X);}function
check_sqlite_name($C){global$j;$Ab="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Ab)\$~",$C)){$j->error=lang(10,str_replace("|",", ",$Ab));return
false;}return
true;}function
create_database($n,$f){global$j;if(file_exists($n)){$j->error=lang(11);return
false;}if(!check_sqlite_name($n))return
false;$_=new
Min_SQLite($n);$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($m){global$j;$j->Min_SQLite(":memory:");foreach($m
as$n){if(!@unlink($n)){$j->error=lang(11);return
false;}}return
true;}function
rename_database($C,$f){global$j;if(!check_sqlite_name($C))return
false;$j->Min_SQLite(":memory:");$j->error=lang(11);return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($Q,$C,$q,$Jb,$Na,$pb,$f,$ta,$hd){$ze=($Q==""||$Jb);foreach($q
as$p){if($p[0]!=""||!$p[1]||$p[2]){$ze=true;break;}}$d=array();$cd=array();$nd=false;foreach($q
as$p){if($p[1]){if($p[1][6])$nd=true;$d[]=($ze?"  ":"ADD ").implode($p[1]);if($p[0]!="")$cd[$p[0]]=$p[1][0];}}if($ze){if($Q!=""){queries("BEGIN");foreach(foreign_keys($Q)as$r){$h=array();foreach($r["source"]as$g){if(!$cd[$g])continue
2;$h[]=$cd[$g];}$Jb[]="  FOREIGN KEY (".implode(", ",$h).") REFERENCES ".table($r["table"])." (".implode(", ",array_map('idf_escape',$r["target"])).") ON DELETE $r[on_delete] ON UPDATE $r[on_update]";}$x=array();foreach(indexes($Q)as$pc=>$w){$h=array();foreach($w["columns"]as$g){if(!$cd[$g])continue
2;$h[]=$cd[$g];}$h="(".implode(", ",$h).")";if($w["type"]!="PRIMARY")$x[]=array($w["type"],$pc,$h);elseif(!$nd)$Jb[]="  PRIMARY KEY $h";}}$d=array_merge($d,$Jb);if(!queries("CREATE TABLE ".table($Q!=""?"adminer_$C":$C)." (\n".implode(",\n",$d)."\n)"))return
false;if($Q!=""){if($cd&&!queries("INSERT INTO ".table("adminer_$C")." (".implode(", ",$cd).") SELECT ".implode(", ",array_map('idf_escape',array_keys($cd)))." FROM ".table($Q)))return
false;$ne=array();foreach(triggers($Q)as$me=>$ce){$le=trigger($me);$ne[]="CREATE TRIGGER ".idf_escape($me)." ".implode(" ",$ce)." ON ".table($C)."\n$le[Statement]";}if(!queries("DROP TABLE ".table($Q)))return
false;queries("ALTER TABLE ".table("adminer_$C")." RENAME TO ".table($C));if(!alter_indexes($C,$x))return
false;foreach($ne
as$le){if(!queries($le))return
false;}queries("COMMIT");}}else{foreach($d
as$X){if(!queries("ALTER TABLE ".table($Q)." $X"))return
false;}if($Q!=$C&&!queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)))return
false;}if($ta)queries("UPDATE sqlite_sequence SET seq = $ta WHERE name = ".q($C));return
true;}function
alter_indexes($Q,$d){foreach($d
as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q)." $X[2]"))return
false;}return
true;}function
truncate_tables($S){return
apply_queries("DELETE FROM",$S);}function
drop_views($De){return
apply_queries("DROP VIEW",$De);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
move_tables($S,$De,$T){return
false;}function
trigger($C){global$j;if($C=="")return
array("Statement"=>"BEGIN\n\t;\nEND");preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$j->result("SELECT sql FROM sqlite_master WHERE name = ".q($C)),$A);return
array("Timing"=>strtoupper($A[1]),"Event"=>strtoupper($A[2]),"Trigger"=>$C,"Statement"=>$A[3]);}function
triggers($Q){$J=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q))as$K){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$K["sql"],$A);$J[$K["name"]]=array($A[1],$A[2]);}return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
insert_into($Q,$O){return
queries("INSERT INTO ".table($Q).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":"DEFAULT VALUES"));}function
insert_update($Q,$O,$md){return
queries("REPLACE INTO ".table($Q)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")");}function
last_id(){global$j;return$j->result("SELECT LAST_INSERT_ROWID()");}function
explain($j,$H){return$j->query("EXPLAIN $H");}function
found_rows($R,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ed){return
true;}function
create_sql($Q,$ta){global$j;return$j->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));}function
truncate_sql($Q){return"DELETE FROM ".table($Q);}function
use_sql($l){}function
trigger_sql($Q,$Rd){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q)));}function
show_variables(){global$j;$J=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$y)$J[$y]=$j->result("PRAGMA $y");return$J;}function
show_status(){$J=array();foreach(get_vals("PRAGMA compile_options")as$Xc){list($y,$X)=explode("=",$Xc,2);$J[$y]=$X;}return$J;}function
convert_field($p){}function
unconvert_field($p,$J){return$J;}function
support($Cb){return
ereg('^(view|trigger|variables|status|dump|move_col|drop_col)$',$Cb);}$nc="sqlite";$pe=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Qd=array_keys($pe);$we=array();$Wc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$Sb=array("hex","length","lower","round","unixepoch","upper");$Vb=array("avg","count","count distinct","group_concat","max","min","sum");$ib=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$eb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$ld=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($sb,$o){if(ini_bool("html_errors"))$o=html_entity_decode(strip_tags($o));$o=ereg_replace('^[^:]*: ','',$o);$this->error=$o;}function
connect($N,$V,$F){global$c;$n=$c->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($F,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($n!=""?addcslashes($n,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$n!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Be=pg_version($this->_link);$this->server_info=$Be["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($P){return"'".pg_escape_string($this->_link,$P)."'";}function
select_db($l){global$c;if($l==$c->database())return$this->_database;$J=@pg_connect("$this->_string dbname='".addcslashes($l,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($J)$this->_link=$J;return$J;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($H,$qe=false){$I=@pg_query($this->_link,$H);$this->error="";if(!$I){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($I)){$this->affected_rows=pg_affected_rows($I);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$p=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
pg_fetch_result($I->_result,0,$p);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;$this->num_rows=pg_num_rows($I);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$g=$this->_offset++;$J=new
stdClass;if(function_exists('pg_field_table'))$J->orgtable=pg_field_table($this->_result,$g);$J->name=pg_field_name($this->_result,$g);$J->orgname=$J->name;$J->type=pg_field_type($this->_result,$g);$J->charsetnr=($J->type=="bytea"?63:0);return$J;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($N,$V,$F){global$c;$n=$c->database();$P="pgsql:host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$P dbname='".($n!=""?addcslashes($n,"'\\"):"postgres")."'",$V,$F);return
true;}function
select_db($l){global$c;return($c->database()==$l);}function
close(){}}}function
idf_escape($v){return'"'.str_replace('"','""',$v).'"';}function
table($v){return
idf_escape($v);}function
connect(){global$c;$j=new
Min_DB;$Ta=$c->credentials();if($j->connect($Ta[0],$Ta[1],$Ta[2])){if($j->server_info>=9)$j->query("SET application_name = 'Adminer'");return$j;}return$j->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($H,$Z,$z,$Pc=0,$Id=" "){return" $H$Z".($z!==null?$Id."LIMIT $z".($Pc?" OFFSET $Pc":""):"");}function
limit1($H,$Z){return" $H$Z";}function
db_collation($n,$Ka){global$j;return$j->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$j;return$j->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($m){return
array();}function
table_status($C=""){$J=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($C!=""?" AND relname = ".q($C):""))as$K)$J[$K["Name"]]=$K;return($C!=""?$J[$C]:$J);}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($Q)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$K){ereg('(.*)(\\((.*)\\))?',$K["full_type"],$A);list(,$K["type"],,$K["length"])=$A;$K["full_type"]=$K["type"].($K["length"]?"($K[length])":"");$K["null"]=($K["attnotnull"]=="f");$K["auto_increment"]=eregi("^nextval\\(",$K["default"]);$K["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~^(.*)::.+$~',$K["default"],$A))$K["default"]=($A[1][0]=="'"?idf_unescape($A[1]):$A[1]);$J[$K["field"]]=$K;}return$J;}function
indexes($Q,$k=null){global$j;if(!is_object($k))$k=$j;$J=array();$Yd=$k->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($Q));$h=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Yd AND attnum > 0",$k);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $Yd AND ci.oid = i.indexrelid",$k)as$K){$J[$K["relname"]]["type"]=($K["indisprimary"]=="t"?"PRIMARY":($K["indisunique"]=="t"?"UNIQUE":"INDEX"));$J[$K["relname"]]["columns"]=array();foreach(explode(" ",$K["indkey"])as$gc)$J[$K["relname"]]["columns"][]=$h[$gc];$J[$K["relname"]]["lengths"]=array();}return$J;}function
foreign_keys($Q){global$Rc;$J=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($Q)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$K){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$K['definition'],$A)){$K['source']=array_map('trim',explode(',',$A[1]));$K['table']=$A[2];if(preg_match('~(.+)\.(.+)~',$A[2],$Bc)){$K['ns']=$Bc[1];$K['table']=$Bc[2];}$K['target']=array_map('trim',explode(',',$A[3]));$K['on_delete']=(preg_match("~ON DELETE ($Rc)~",$A[4],$Bc)?$Bc[1]:'NO ACTION');$K['on_update']=(preg_match("~ON UPDATE ($Rc)~",$A[4],$Bc)?$Bc[1]:'NO ACTION');$J[$K['conname']]=$K;}}return$J;}function
view($C){global$j;return
array("select"=>$j->result("SELECT pg_get_viewdef(".q($C).")"));}function
collations(){return
array();}function
information_schema($n){return($n=="information_schema");}function
error(){global$j;$J=h($j->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$J,$A))$J=$A[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($A[3]).'})(.*)~','\\1<b>\\2</b>',$A[2]).$A[4];return
nl_br($J);}function
exact_value($X){return
q($X);}function
create_database($n,$f){return
queries("CREATE DATABASE ".idf_escape($n).($f?" ENCODING ".idf_escape($f):""));}function
drop_databases($m){global$j;$j->close();return
apply_queries("DROP DATABASE",$m,'idf_escape');}function
rename_database($C,$f){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($C));}function
auto_increment(){return"";}function
alter_table($Q,$C,$q,$Jb,$Na,$pb,$f,$ta,$hd){$d=array();$sd=array();foreach($q
as$p){$g=idf_escape($p[0]);$X=$p[1];if(!$X)$d[]="DROP $g";else{$Ae=$X[5];unset($X[5]);if(isset($X[6])&&$p[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($p[0]=="")$d[]=($Q!=""?"ADD ":"  ").implode($X);else{if($g!=$X[0])$sd[]="ALTER TABLE ".table($Q)." RENAME $g TO $X[0]";$d[]="ALTER $g TYPE$X[1]";if(!$X[6]){$d[]="ALTER $g ".($X[3]?"SET$X[3]":"DROP DEFAULT");$d[]="ALTER $g ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($p[0]!=""||$Ae!="")$sd[]="COMMENT ON COLUMN ".table($Q).".$X[0] IS ".($Ae!=""?substr($Ae,9):"''");}}$d=array_merge($d,$Jb);if($Q=="")array_unshift($sd,"CREATE TABLE ".table($C)." (\n".implode(",\n",$d)."\n)");elseif($d)array_unshift($sd,"ALTER TABLE ".table($Q)."\n".implode(",\n",$d));if($Q!=""&&$Q!=$C)$sd[]="ALTER TABLE ".table($Q)." RENAME TO ".table($C);if($Q!=""||$Na!="")$sd[]="COMMENT ON TABLE ".table($C)." IS ".q($Na);if($ta!=""){}foreach($sd
as$H){if(!queries($H))return
false;}return
true;}function
alter_indexes($Q,$d){$Ra=array();$fb=array();foreach($d
as$X){if($X[0]!="INDEX")$Ra[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").$X[2]);elseif($X[2]=="DROP")$fb[]=idf_escape($X[1]);elseif(!queries("CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q)." $X[2]"))return
false;}return((!$Ra||queries("ALTER TABLE ".table($Q).implode(",",$Ra)))&&(!$fb||queries("DROP INDEX ".implode(", ",$fb))));}function
truncate_tables($S){return
queries("TRUNCATE ".implode(", ",array_map('table',$S)));return
true;}function
drop_views($De){return
queries("DROP VIEW ".implode(", ",array_map('table',$De)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$De,$T){foreach($S
as$Q){if(!queries("ALTER TABLE ".table($Q)." SET SCHEMA ".idf_escape($T)))return
false;}foreach($De
as$Q){if(!queries("ALTER VIEW ".table($Q)." SET SCHEMA ".idf_escape($T)))return
false;}return
true;}function
trigger($C){if($C=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$L=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($C));return
reset($L);}function
triggers($Q){$J=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($Q))as$K)$J[$K["trigger_name"]]=array($K["condition_timing"],$K["event_manipulation"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
begin(){return
queries("BEGIN");}function
insert_into($Q,$O){return
queries("INSERT INTO ".table($Q).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":"DEFAULT VALUES"));}function
insert_update($Q,$O,$md){global$j;$xe=array();$Z=array();foreach($O
as$y=>$X){$xe[]="$y = $X";if(isset($md[idf_unescape($y)]))$Z[]="$y = $X";}return($Z&&queries("UPDATE ".table($Q)." SET ".implode(", ",$xe)." WHERE ".implode(" AND ",$Z))&&$j->affected_rows)||queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")");}function
last_id(){return
0;}function
explain($j,$H){return$j->query("EXPLAIN $H");}function
found_rows($R,$Z){global$j;if(ereg(" rows=([0-9]+)",$j->result("EXPLAIN SELECT * FROM ".idf_escape($R["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$vd))return$vd[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$j;return$j->result("SELECT current_schema()");}function
set_schema($Dd){global$j,$pe,$Qd;$J=$j->query("SET search_path TO ".idf_escape($Dd));foreach(types()as$U){if(!isset($pe[$U])){$pe[$U]=0;$Qd[lang(12)][]=$U;}}return$J;}function
use_sql($l){return"\connect ".idf_escape($l);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$j;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($j->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($p){}function
unconvert_field($p,$J){return$J;}function
support($Cb){return
ereg('^(comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$',$Cb);}$nc="pgsql";$pe=array();$Qd=array();foreach(array(lang(13)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(14)=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),lang(15)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(16)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(17)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(18)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$y=>$X){$pe+=$X;$Qd[$y]=array_keys($X);}$we=array();$Wc=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Sb=array("char_length","lower","round","to_hex","to_timestamp","upper");$Vb=array("avg","count","count distinct","max","min","sum");$ib=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$eb["oracle"]="Oracle";if(isset($_GET["oracle"])){$ld=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($sb,$o){if(ini_bool("html_errors"))$o=html_entity_decode(strip_tags($o));$o=ereg_replace('^[^:]*: ','',$o);$this->error=$o;}function
connect($N,$V,$F){$this->_link=@oci_new_connect($V,$F,$N,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$o=oci_error();$this->error=$o["message"];return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($l){return
true;}function
query($H,$qe=false){$I=oci_parse($this->_link,$H);$this->error="";if(!$I){$o=oci_error($this->_link);$this->error=$o["message"];return
false;}set_error_handler(array($this,'_error'));$J=@oci_execute($I);restore_error_handler();if($J){if(oci_num_fields($I))return
new
Min_Result($I);$this->affected_rows=oci_num_rows($I);}return$J;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$p=1){$I=$this->query($H);if(!is_object($I)||!oci_fetch($I->_result))return
false;return
oci_result($I->_result,$p);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$y=>$X){if(is_a($X,'OCI-Lob'))$K[$y]=$X->load();}return$K;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$g=$this->_offset++;$J=new
stdClass;$J->name=oci_field_name($this->_result,$g);$J->orgname=$J->name;$J->type=oci_field_type($this->_result,$g);$J->charsetnr=(ereg("raw|blob|bfile",$J->type)?63:0);return$J;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($N,$V,$F){$this->dsn("oci:dbname=//$N;charset=AL32UTF8",$V,$F);return
true;}function
select_db($l){return
true;}}}function
idf_escape($v){return'"'.str_replace('"','""',$v).'"';}function
table($v){return
idf_escape($v);}function
connect(){global$c;$j=new
Min_DB;$Ta=$c->credentials();if($j->connect($Ta[0],$Ta[1],$Ta[2]))return$j;return$j->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($H,$Z,$z,$Pc=0,$Id=" "){return($Pc?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $H$Z) t WHERE rownum <= ".($z+$Pc).") WHERE rnum > $Pc":($z!==null?" * FROM (SELECT $H$Z) WHERE rownum <= ".($z+$Pc):" $H$Z"));}function
limit1($H,$Z){return" $H$Z";}function
db_collation($n,$Ka){global$j;return$j->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$j;return$j->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($m){return
array();}function
table_status($C=""){$J=array();$Fd=q($C);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($C!=""?" AND table_name = $Fd":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($C!=""?" WHERE view_name = $Fd":""))as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($Q)." ORDER BY column_id")as$K){$U=$K["DATA_TYPE"];$xc="$K[DATA_PRECISION],$K[DATA_SCALE]";if($xc==",")$xc=$K["DATA_LENGTH"];$J[$K["COLUMN_NAME"]]=array("field"=>$K["COLUMN_NAME"],"full_type"=>$U.($xc?"($xc)":""),"type"=>strtolower($U),"length"=>$xc,"default"=>$K["DATA_DEFAULT"],"null"=>($K["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
indexes($Q,$k=null){$J=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($Q)."
ORDER BY uc.constraint_type, uic.column_position",$k)as$K){$J[$K["INDEX_NAME"]]["type"]=($K["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($K["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$J[$K["INDEX_NAME"]]["columns"][]=$K["COLUMN_NAME"];$J[$K["INDEX_NAME"]]["lengths"][]=($K["CHAR_LENGTH"]&&$K["CHAR_LENGTH"]!=$K["COLUMN_LENGTH"]?$K["CHAR_LENGTH"]:null);}return$J;}function
view($C){$L=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($C));return
reset($L);}function
collations(){return
array();}function
information_schema($n){return
false;}function
error(){global$j;return
h($j->error);}function
exact_value($X){return
q($X);}function
explain($j,$H){$j->query("EXPLAIN PLAN FOR $H");return$j->query("SELECT * FROM plan_table");}function
found_rows($R,$Z){}function
alter_table($Q,$C,$q,$Jb,$Na,$pb,$f,$ta,$hd){$d=$fb=array();foreach($q
as$p){$X=$p[1];if($X&&$p[0]!=""&&idf_escape($p[0])!=$X[0])queries("ALTER TABLE ".table($Q)." RENAME COLUMN ".idf_escape($p[0])." TO $X[0]");if($X)$d[]=($Q!=""?($p[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($Q!=""?")":"");else$fb[]=idf_escape($p[0]);}if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$d)."\n)");return(!$d||queries("ALTER TABLE ".table($Q)."\n".implode("\n",$d)))&&(!$fb||queries("ALTER TABLE ".table($Q)." DROP (".implode(", ",$fb).")"))&&($Q==$C||queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)));}function
foreign_keys($Q){return
array();}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($De){return
apply_queries("DROP VIEW",$De);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
begin(){return
true;}function
insert_into($Q,$O){return
queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")");}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$j;return$j->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($Ed){global$j;return$j->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($Ed));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$L=get_rows('SELECT * FROM v$instance');return
reset($L);}function
convert_field($p){}function
unconvert_field($p,$J){return$J;}function
support($Cb){return
ereg("view|scheme|processlist|drop_col|variables|status",$Cb);}$nc="oracle";$pe=array();$Qd=array();foreach(array(lang(13)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(14)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(15)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(16)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$y=>$X){$pe+=$X;$Qd[$y]=array_keys($X);}$we=array();$Wc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Sb=array("length","lower","round","upper");$Vb=array("avg","count","count distinct","max","min","sum");$ib=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$eb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$ld=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$o)$this->error.="$o[message]\n";$this->error=rtrim($this->error);}function
connect($N,$V,$F){$this->_link=@sqlsrv_connect($N,array("UID"=>$V,"PWD"=>$F,"CharacterSet"=>"UTF-8"));if($this->_link){$hc=sqlsrv_server_info($this->_link);$this->server_info=$hc['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($l){return$this->query("USE ".idf_escape($l));}function
query($H,$qe=false){$I=sqlsrv_query($this->_link,$H);$this->error="";if(!$I){$this->_get_error();return
false;}return$this->store_result($I);}function
multi_query($H){$this->_result=sqlsrv_query($this->_link,$H);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($I=null){if(!$I)$I=$this->_result;if(sqlsrv_field_metadata($I))return
new
Min_Result($I);$this->affected_rows=sqlsrv_rows_affected($I);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($H,$p=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->fetch_row();return$K[$p];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$y=>$X){if(is_a($X,'DateTime'))$K[$y]=$X->format("Y-m-d H:i:s");}return$K;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$p=$this->_fields[$this->_offset++];$J=new
stdClass;$J->name=$p["Name"];$J->orgname=$p["Name"];$J->type=($p["Type"]==1?254:0);return$J;}function
seek($Pc){for($t=0;$t<$Pc;$t++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($N,$V,$F){$this->_link=@mssql_connect($N,$V,$F);if($this->_link){$I=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$K=$I->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$K[0]] $K[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($l){return
mssql_select_db($l);}function
query($H,$qe=false){$I=mssql_query($H,$this->_link);$this->error="";if(!$I){$this->error=mssql_get_last_message();return
false;}if($I===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($H,$p=0){$I=$this->query($H);if(!is_object($I))return
false;return
mssql_result($I->_result,0,$p);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($I){$this->_result=$I;$this->num_rows=mssql_num_rows($I);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$J=mssql_fetch_field($this->_result);$J->orgtable=$J->table;$J->orgname=$J->name;return$J;}function
seek($Pc){mssql_data_seek($this->_result,$Pc);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($v){return"[".str_replace("]","]]",$v)."]";}function
table($v){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($v);}function
connect(){global$c;$j=new
Min_DB;$Ta=$c->credentials();if($j->connect($Ta[0],$Ta[1],$Ta[2]))return$j;return$j->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($H,$Z,$z,$Pc=0,$Id=" "){return($z!==null?" TOP (".($z+$Pc).")":"")." $H$Z";}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($n,$Ka){global$j;return$j->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($n));}function
engines(){return
array();}function
logged_user(){global$j;return$j->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($m){global$j;$J=array();foreach($m
as$n){$j->select_db($n);$J[$n]=$j->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$J;}function
table_status($C=""){$J=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($C!=""?" AND name = ".q($C):""))as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]=="VIEW";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($Q))as$K){$U=$K["type"];$xc=(ereg("char|binary",$U)?$K["max_length"]:($U=="decimal"?"$K[precision],$K[scale]":""));$J[$K["name"]]=array("field"=>$K["name"],"full_type"=>$U.($xc?"($xc)":""),"type"=>$U,"length"=>$xc,"default"=>$K["default"],"null"=>$K["is_nullable"],"auto_increment"=>$K["is_identity"],"collation"=>$K["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$K["is_identity"],);}return$J;}function
indexes($Q,$k=null){$J=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($Q),$k)as$K){$J[$K["name"]]["type"]=($K["is_primary_key"]?"PRIMARY":($K["is_unique"]?"UNIQUE":"INDEX"));$J[$K["name"]]["lengths"]=array();$J[$K["name"]]["columns"][$K["key_ordinal"]]=$K["column_name"];}return$J;}function
view($C){global$j;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$j->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($C))));}function
collations(){$J=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$f)$J[ereg_replace("_.*","",$f)][]=$f;return$J;}function
information_schema($n){return
false;}function
error(){global$j;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$j->error)));}function
exact_value($X){return
q($X);}function
create_database($n,$f){return
queries("CREATE DATABASE ".idf_escape($n).(eregi('^[a-z0-9_]+$',$f)?" COLLATE $f":""));}function
drop_databases($m){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$m)));}function
rename_database($C,$f){if(eregi('^[a-z0-9_]+$',$f))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $f");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($C));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($Q,$C,$q,$Jb,$Na,$pb,$f,$ta,$hd){$d=array();foreach($q
as$p){$g=idf_escape($p[0]);$X=$p[1];if(!$X)$d["DROP"][]=" COLUMN $g";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($p[0]=="")$d["ADD"][]="\n  ".implode("",$X).($Q==""?substr($Jb[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($g!=$X[0])queries("EXEC sp_rename ".q(table($Q).".$g").", ".q(idf_unescape($X[0])).", 'COLUMN'");$d["ALTER COLUMN ".implode("",$X)][]="";}}}if($Q=="")return
queries("CREATE TABLE ".table($C)." (".implode(",",(array)$d["ADD"])."\n)");if($Q!=$C)queries("EXEC sp_rename ".q(table($Q)).", ".q($C));if($Jb)$d[""]=$Jb;foreach($d
as$y=>$X){if(!queries("ALTER TABLE ".idf_escape($C)." $y".implode(",",$X)))return
false;}return
true;}function
alter_indexes($Q,$d){$w=array();$fb=array();foreach($d
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$fb[]=idf_escape($X[1]);else$w[]=idf_escape($X[1])." ON ".table($Q);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q):"ALTER TABLE ".table($Q)." ADD PRIMARY KEY")." $X[2]"))return
false;}return(!$w||queries("DROP INDEX ".implode(", ",$w)))&&(!$fb||queries("ALTER TABLE ".table($Q)." DROP ".implode(", ",$fb)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($Q,$O){return
queries("INSERT INTO ".table($Q).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":"DEFAULT VALUES"));}function
insert_update($Q,$O,$md){$xe=array();$Z=array();foreach($O
as$y=>$X){$xe[]="$y = $X";if(isset($md[idf_unescape($y)]))$Z[]="$y = $X";}return
queries("MERGE ".table($Q)." USING (VALUES(".implode(", ",$O).")) AS source (c".implode(", c",range(1,count($O))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$xe)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).");");}function
last_id(){global$j;return$j->result("SELECT SCOPE_IDENTITY()");}function
explain($j,$H){$j->query("SET SHOWPLAN_ALL ON");$J=$j->query($H);$j->query("SET SHOWPLAN_ALL OFF");return$J;}function
found_rows($R,$Z){}function
foreign_keys($Q){$J=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($Q))as$K){$r=&$J[$K["FK_NAME"]];$r["table"]=$K["PKTABLE_NAME"];$r["source"][]=$K["FKCOLUMN_NAME"];$r["target"][]=$K["PKCOLUMN_NAME"];}return$J;}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($De){return
queries("DROP VIEW ".implode(", ",array_map('table',$De)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$De,$T){return
apply_queries("ALTER SCHEMA ".idf_escape($T)." TRANSFER",array_merge($S,$De));}function
trigger($C){if($C=="")return
array();$L=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($C));$J=reset($L);if($J)$J["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$J["text"]);return$J;}function
triggers($Q){$J=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($Q))as$K)$J[$K["name"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$j;if($_GET["ns"]!="")return$_GET["ns"];return$j->result("SELECT SCHEMA_NAME()");}function
set_schema($Dd){return
true;}function
use_sql($l){return"USE ".idf_escape($l);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($p){}function
unconvert_field($p,$J){return$J;}function
support($Cb){return
ereg('^(scheme|trigger|view|drop_col)$',$Cb);}$nc="mssql";$pe=array();$Qd=array();foreach(array(lang(13)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(14)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(15)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(16)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$y=>$X){$pe+=$X;$Qd[$y]=array_keys($X);}$we=array();$Wc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Sb=array("len","lower","round","upper");$Vb=array("avg","count","count distinct","max","min","sum");$ib=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$eb=array("server"=>"MySQL")+$eb;if(!defined("DRIVER")){$ld=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($N,$V,$F){mysqli_report(MYSQLI_REPORT_OFF);list($ac,$jd)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$ac:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$F!=""?$F:ini_get("mysqli.default_pw")),null,(is_numeric($jd)?$jd:ini_get("mysqli.default_port")),(!is_numeric($jd)?$jd:null));if($J){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$J;}function
result($H,$p=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$p];}function
quote($P){return"'".$this->escape_string($P)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($N,$V,$F){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$V"!=""?$V:ini_get("mysql.default_user")),("$N$V$F"!=""?$F:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($P){return"'".mysql_real_escape_string($P,$this->_link)."'";}function
select_db($l){return
mysql_select_db($l,$this->_link);}function
query($H,$qe=false){$I=@($qe?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->error=mysql_error($this->_link);return
false;}if($I===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$p=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
mysql_result($I->_result,0,$p);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($I){$this->_result=$I;$this->num_rows=mysql_num_rows($I);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$J=mysql_fetch_field($this->_result,$this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=($J->blob?63:0);return$J;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($N,$V,$F){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$F);$this->query("SET NAMES utf8");return
true;}function
select_db($l){return$this->query("USE ".idf_escape($l));}function
query($H,$qe=false){$this->setAttribute(1000,!$qe);return
parent::query($H,$qe);}}}function
idf_escape($v){return"`".str_replace("`","``",$v)."`";}function
table($v){return
idf_escape($v);}function
connect(){global$c;$j=new
Min_DB;$Ta=$c->credentials();if($j->connect($Ta[0],$Ta[1],$Ta[2])){$j->query("SET sql_quote_show_create = 1, autocommit = 1");return$j;}$J=$j->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($Cd=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$Cd;return$J;}function
get_databases($Ib){global$j;$J=get_session("dbs");if($J===null){$H=($j->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Ib?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$Z,$z,$Pc=0,$Id=" "){return" $H$Z".($z!==null?$Id."LIMIT $z".($Pc?" OFFSET $Pc":""):"");}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($n,$Ka){global$j;$J=null;$Ra=$j->result("SHOW CREATE DATABASE ".idf_escape($n),1);if(preg_match('~ COLLATE ([^ ]+)~',$Ra,$A))$J=$A[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Ra,$A))$J=$Ka[$A[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(ereg("YES|DEFAULT",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$j;return$j->result("SELECT USER()");}function
tables_list(){global$j;return
get_key_vals("SHOW".($j->server_info>=5?" FULL":"")." TABLES");}function
count_tables($m){$J=array();foreach($m
as$n)$J[$n]=count(get_vals("SHOW TABLES IN ".idf_escape($n)));return$J;}function
table_status($C=""){$J=array();foreach(get_rows("SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Rows"]))$K["Comment"]="";if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return!isset($R["Rows"]);}function
fk_support($R){return
eregi("InnoDB|IBMDB2I",$R["Engine"]);}function
fields($Q){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($Q))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$A);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$A[1],"length"=>$A[2],"unsigned"=>ltrim($A[3].$A[4]),"default"=>($K["Default"]!=""||ereg("char",$A[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$K["Extra"],$A)?$A[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(explode(",",$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($Q,$k=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($Q),$k)as$K){$J[$K["Key_name"]]["type"]=($K["Key_name"]=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?"INDEX":"UNIQUE")));$J[$K["Key_name"]]["columns"][]=$K["Column_name"];$J[$K["Key_name"]]["lengths"][]=$K["Sub_part"];}return$J;}function
foreign_keys($Q){global$j,$Rc;static$G='`(?:[^`]|``)+`';$J=array();$Sa=$j->result("SHOW CREATE TABLE ".table($Q),1);if($Sa){preg_match_all("~CONSTRAINT ($G) FOREIGN KEY \\(((?:$G,? ?)+)\\) REFERENCES ($G)(?:\\.($G))? \\(((?:$G,? ?)+)\\)(?: ON DELETE ($Rc))?(?: ON UPDATE ($Rc))?~",$Sa,$Cc,PREG_SET_ORDER);foreach($Cc
as$A){preg_match_all("~$G~",$A[2],$Ld);preg_match_all("~$G~",$A[5],$T);$J[idf_unescape($A[1])]=array("db"=>idf_unescape($A[4]!=""?$A[3]:$A[4]),"table"=>idf_unescape($A[4]!=""?$A[4]:$A[3]),"source"=>array_map('idf_unescape',$Ld[0]),"target"=>array_map('idf_unescape',$T[0]),"on_delete"=>($A[6]?$A[6]:"RESTRICT"),"on_update"=>($A[7]?$A[7]:"RESTRICT"),);}}return$J;}function
view($C){global$j;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$j->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$y=>$X)asort($J[$y]);return$J;}function
information_schema($n){global$j;return($j->server_info>=5&&$n=="information_schema")||($j->server_info>=5.5&&$n=="performance_schema");}function
error(){global$j;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$j->error));}function
error_line(){global$j;if(ereg(' at line ([0-9]+)$',$j->error,$vd))return$vd[1]-1;}function
exact_value($X){return
q($X)." COLLATE utf8_bin";}function
create_database($n,$f){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($n).($f?" COLLATE ".q($f):""));}function
drop_databases($m){set_session("dbs",null);return
apply_queries("DROP DATABASE",$m,'idf_escape');}function
rename_database($C,$f){if(create_database($C,$f)){$wd=array();foreach(tables_list()as$Q=>$U)$wd[]=table($Q)." TO ".idf_escape($C).".".table($Q);if(!$wd||queries("RENAME TABLE ".implode(", ",$wd))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$ua=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$w){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$w["columns"],true)){$ua="";break;}if($w["type"]=="PRIMARY")$ua=" UNIQUE";}}return" AUTO_INCREMENT$ua";}function
alter_table($Q,$C,$q,$Jb,$Na,$pb,$f,$ta,$hd){$d=array();foreach($q
as$p)$d[]=($p[1]?($Q!=""?($p[0]!=""?"CHANGE ".idf_escape($p[0]):"ADD"):" ")." ".implode($p[1]).($Q!=""?$p[2]:""):"DROP ".idf_escape($p[0]));$d=array_merge($d,$Jb);$Od="COMMENT=".q($Na).($pb?" ENGINE=".q($pb):"").($f?" COLLATE ".q($f):"").($ta!=""?" AUTO_INCREMENT=$ta":"").$hd;if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$d)."\n) $Od");if($Q!=$C)$d[]="RENAME TO ".table($C);$d[]=$Od;return
queries("ALTER TABLE ".table($Q)."\n".implode(",\n",$d));}function
alter_indexes($Q,$d){foreach($d
as$y=>$X)$d[$y]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"").$X[2]);return
queries("ALTER TABLE ".table($Q).implode(",",$d));}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($De){return
queries("DROP VIEW ".implode(", ",array_map('table',$De)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$De,$T){$wd=array();foreach(array_merge($S,$De)as$Q)$wd[]=table($Q)." TO ".idf_escape($T).".".table($Q);return
queries("RENAME TABLE ".implode(", ",$wd));}function
copy_tables($S,$De,$T){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($S
as$Q){$C=($T==DB?table("copy_$Q"):idf_escape($T).".".table($Q));if(!queries("DROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($Q))||!queries("INSERT INTO $C SELECT * FROM ".table($Q)))return
false;}foreach($De
as$Q){$C=($T==DB?table("copy_$Q"):idf_escape($T).".".table($Q));$Ce=view($Q);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $Ce[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($L);}function
triggers($Q){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){global$j,$qb,$jc,$pe;$na=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$oe="((".implode("|",array_merge(array_keys($pe),$na)).")\\b(?:\\s*\\(((?:[^'\")]*|$qb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$G="\\s*(".($U=="FUNCTION"?"":$jc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$oe";$Ra=$j->result("SHOW CREATE $U ".idf_escape($C),2);preg_match("~\\(((?:$G\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$oe\\s+":"")."(.*)~is",$Ra,$A);$q=array();preg_match_all("~$G\\s*,?~is",$A[1],$Cc,PREG_SET_ORDER);foreach($Cc
as$fd){$C=str_replace("``","`",$fd[2]).$fd[3];$q[]=array("field"=>$C,"type"=>strtolower($fd[5]),"length"=>preg_replace_callback("~$qb~s",'normalize_enum',$fd[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$fd[8] $fd[7]"))),"null"=>1,"full_type"=>$fd[4],"inout"=>strtoupper($fd[1]),"collation"=>strtolower($fd[9]),);}if($U!="FUNCTION")return
array("fields"=>$q,"definition"=>$A[11]);return
array("fields"=>$q,"returns"=>array("type"=>$A[12],"length"=>$A[13],"unsigned"=>$A[15],"collation"=>$A[16]),"definition"=>$A[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($Q,$O){return
queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")");}function
insert_update($Q,$O,$md){foreach($O
as$y=>$X)$O[$y]="$y = $X";$xe=implode(", ",$O);return
queries("INSERT INTO ".table($Q)." SET $xe ON DUPLICATE KEY UPDATE $xe");}function
last_id(){global$j;return$j->result("SELECT LAST_INSERT_ID()");}function
explain($j,$H){return$j->query("EXPLAIN $H");}function
found_rows($R,$Z){return($Z||$R["Engine"]!="InnoDB"?null:$R["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Dd){return
true;}function
create_sql($Q,$ta){global$j;$J=$j->result("SHOW CREATE TABLE ".table($Q),1);if(!$ta)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
use_sql($l){return"USE ".idf_escape($l);}function
trigger_sql($Q,$Rd){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_")),null,"-- ")as$K)$J.="\n".($Rd=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($p){if(ereg("binary",$p["type"]))return"HEX(".idf_escape($p["field"]).")";if(ereg("geometry|point|linestring|polygon",$p["type"]))return"AsWKT(".idf_escape($p["field"]).")";}function
unconvert_field($p,$J){if(ereg("binary",$p["type"]))$J="UNHEX($J)";if(ereg("geometry|point|linestring|polygon",$p["type"]))$J="GeomFromText($J)";return$J;}function
support($Cb){global$j;return!ereg("scheme|sequence|type".($j->server_info<5.1?"|event|partitioning".($j->server_info<5?"|view|routine|trigger":""):""),$Cb);}$nc="sql";$pe=array();$Qd=array();foreach(array(lang(13)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(14)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(15)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(19)=>array("enum"=>65535,"set"=>64),lang(16)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(18)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$y=>$X){$pe+=$X;$Qd[$y]=array_keys($X);}$we=array("unsigned","zerofill","unsigned zerofill");$Wc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Sb=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Vb=array("avg","count","count distinct","group_concat","max","min","sum");$ib=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ba="3.6.2";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' id='h1'>".lang(20)."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$j;$m=$this->databases(false);return(!$m?$j->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$m[(information_schema($m[0])?1:0)]);}function
databases($Ib=true){return
get_databases($Ib);}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>',lang(21),'<td><input type="hidden" name="auth[driver]" value="server"><input id="username" name="auth[username]" value="',h($_GET["username"]),'">
<tr><th>',lang(22),'<td><input type="password" name="auth[password]">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".lang(23)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(24))."\n";}function
login($_c,$F){global$j;$j->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($Wd){return
h($Wd["Comment"]!=""?$Wd["Comment"]:$Wd["Name"]);}function
fieldName($p,$ad=0){return
h($p["comment"]!=""?$p["comment"]:$p["field"]);}function
selectLinks($Wd,$O=""){$b=$Wd["Name"];if($O!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($b).$O).'">'.lang(25)."</a>\n";echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".lang(26)."'>&gt;&gt;</a>\n";}function
foreignKeys($Q){return
foreign_keys($Q);}function
backwardKeys($Q,$Vd){$J=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($Q)."
ORDER BY ORDINAL_POSITION",null,"")as$K)$J[$K["TABLE_NAME"]]["keys"][$K["CONSTRAINT_NAME"]][$K["COLUMN_NAME"]]=$K["REFERENCED_COLUMN_NAME"];foreach($J
as$y=>$X){$C=$this->tableName(table_status($y));if($C!=""){$Fd=preg_quote($Vd);$Id="(:|\\s*-)?\\s+";$J[$y]["name"]=(preg_match("(^$Fd$Id(.+)|^(.+?)$Id$Fd\$)iu",$C,$A)?$A[2].$A[3]:$C);}else
unset($J[$y]);}return$J;}function
backwardKeysPrint($xa,$K){foreach($xa
as$Q=>$wa){foreach($wa["keys"]as$La){$_=ME.'select='.urlencode($Q);$t=0;foreach($La
as$g=>$X)$_.=where_link($t++,$g,$K[$X]);echo"<a href='".h($_)."'>".h($wa["name"])."</a>";$_=ME.'edit='.urlencode($Q);foreach($La
as$g=>$X)$_.="&set".urlencode("[".bracket_escape($g)."]")."=".urlencode($K[$X]);echo"<a href='".h($_)."' title='".lang(25)."'>+</a> ";}}}function
selectQuery($H){return"<!--\n".str_replace("--","--><!-- ",$H)."\n-->\n";}function
rowDescription($Q){foreach(fields($Q)as$p){if(ereg("varchar|character varying",$p["type"]))return
idf_escape($p["field"]);}return"";}function
rowDescriptions($L,$Lb){$J=$L;foreach($L[0]as$y=>$X){if(list($Q,$u,$C)=$this->_foreignColumn($Lb,$y)){$dc=array();foreach($L
as$K)$dc[$K[$y]]=exact_value($K[$y]);$Ya=$this->_values[$Q];if(!$Ya)$Ya=get_key_vals("SELECT $u, $C FROM ".table($Q)." WHERE $u IN (".implode(", ",$dc).")");foreach($L
as$B=>$K){if(isset($K[$y]))$J[$B][$y]=(string)$Ya[$K[$y]];}}}return$J;}function
selectVal($X,$_,$p){$J=($X===null?"&nbsp;":$X);$_=h($_);if(ereg('blob|bytea',$p["type"])&&!is_utf8($X)){$J=lang(27,strlen($X));if(ereg("^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)",$X))$J="<img src='$_' alt='$J'>";}if(like_bool($p)&&$J!="&nbsp;")$J=($X?lang(28):lang(29));if($_)$J="<a href='$_'>$J</a>";if(!$_&&!like_bool($p)&&ereg('int|float|double|decimal',$p["type"]))$J="<div class='number'>$J</div>";elseif(ereg('date',$p["type"]))$J="<div class='datetime'>$J</div>";return$J;}function
editVal($X,$p){if(ereg('date|timestamp',$p["type"])&&$X!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~',lang(30),$X);return$X;}function
selectColumnsPrint($M,$h){}function
selectSearchPrint($Z,$h,$x){$Z=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.lang(31)."</legend><div>\n";$qc=array();foreach($Z
as$y=>$X)$qc[$X["col"]]=$y;$t=0;$q=fields($_GET["select"]);foreach($h
as$C=>$Xa){$p=$q[$C];if(ereg("enum",$p["type"])||like_bool($p)){$y=$qc[$C];$t--;echo"<div>".h($Xa)."<input type='hidden' name='where[$t][col]' value='".h($C)."'>:",(like_bool($p)?" <select name='where[$t][val]'>".optionlist(array(""=>"",lang(29),lang(28)),$Z[$y]["val"],true)."</select>":enum_input("checkbox"," name='where[$t][val][]'",$p,(array)$Z[$y]["val"],($p["null"]?0:null))),"</div>\n";unset($h[$C]);}elseif(is_array($Yc=$this->_foreignKeyOptions($_GET["select"],$C))){if($q[$C]["null"])$Yc[0]='('.lang(4).')';$y=$qc[$C];$t--;echo"<div>".h($Xa)."<input type='hidden' name='where[$t][col]' value='".h($C)."'><input type='hidden' name='where[$t][op]' value='='>: <select name='where[$t][val]'>".optionlist($Yc,$Z[$y]["val"],true)."</select></div>\n";unset($h[$C]);}}$t=0;foreach($Z
as$X){if(($X["col"]==""||$h[$X["col"]])&&"$X[col]$X[val]"!=""){echo"<div><select name='where[$t][col]'><option value=''>(".lang(32).")".optionlist($h,$X["col"],true)."</select>",html_select("where[$t][op]",array(-1=>"")+$this->operators,$X["op"]),"<input type='search' name='where[$t][val]' value='".h($X["val"])."'></div>\n";$t++;}}echo"<div><select name='where[$t][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".lang(32).")".optionlist($h,null,true)."</select>",html_select("where[$t][op]",array(-1=>"")+$this->operators),"<input type='search' name='where[$t][val]' onchange='selectAddRow(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($ad,$h,$x){$bd=array();foreach($x
as$y=>$w){$ad=array();foreach($w["columns"]as$X)$ad[]=$h[$X];if(count(array_filter($ad,'strlen'))>1&&$y!="PRIMARY")$bd[$y]=implode(", ",$ad);}if($bd){echo'<fieldset><legend>'.lang(33)."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$bd,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".lang(34)."</legend><div>";echo
html_select("limit",array("","30","100"),$z),"</div></fieldset>\n";}function
selectLengthPrint($ae){}function
selectActionPrint($x){echo"<fieldset><legend>".lang(35)."</legend><div>","<input type='submit' value='".lang(36)."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($mb,$h){if($mb){print_fieldset("email",lang(37),$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".lang(38).": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",lang(39).": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$h,$_POST["email_addition"])."<input type='submit' name='email_append' value='".lang(40)."'>\n";echo"<p>".lang(41).": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($mb)==1?'<input type="hidden" name="email_field" value="'.h(key($mb)).'">':html_select("email_field",$mb)),"<input type='submit' name='email' value='".lang(42)."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($h,$x){return
array(array(),array());}function
selectSearchProcess($q,$x){$J=array();foreach((array)$_GET["where"]as$y=>$Z){$Ja=$Z["col"];$Uc=$Z["op"];$X=$Z["val"];if(($y<0?"":$Ja).$X!=""){$Oa=array();foreach(($Ja!=""?array($Ja=>$q[$Ja]):$q)as$C=>$p){if($Ja!=""||is_numeric($X)||!ereg('int|float|double|decimal',$p["type"])){$C=idf_escape($C);if($Ja!=""&&$p["type"]=="enum")$Oa[]=(in_array(0,$X)?"$C IS NULL OR ":"")."$C IN (".implode(", ",array_map('intval',$X)).")";else{$be=ereg('char|text|enum|set',$p["type"]);$Y=$this->processInput($p,(!$Uc&&$be&&ereg('^[^%]+$',$X)?"%$X%":$X));$Oa[]=$C.($Y=="NULL"?" IS".($Uc==">="?" NOT":"")." $Y":(in_array($Uc,$this->operators)||$Uc=="="?" $Uc $Y":($be?" LIKE $Y":" IN (".str_replace(",","', '",$Y).")")));if($y<0&&$X=="0")$Oa[]="$C IS NULL";}}}$J[]=($Oa?"(".implode(" OR ",$Oa).")":"0");}}return$J;}function
selectOrderProcess($q,$x){$fc=$_GET["index_order"];if($fc!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($fc!=""?array($x[$fc]):$x)as$w){if($fc!=""||$w["type"]=="INDEX"){$Xa=false;foreach($w["columns"]as$X){if(ereg('date|timestamp',$q[$X]["type"])){$Xa=true;break;}}$J=array();foreach($w["columns"]as$X)$J[]=idf_escape($X).($Xa?" DESC":"");return$J;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($Z,$Lb){if($_POST["email_append"])return
true;if($_POST["email"]){$Hd=0;if($_POST["all"]||$_POST["check"]){$p=idf_escape($_POST["email_field"]);$Sd=$_POST["email_subject"];$Hc=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Sd.$Hc",$Cc);$L=get_rows("SELECT DISTINCT $p".($Cc[1]?", ".implode(", ",array_map('idf_escape',array_unique($Cc[1]))):"")." FROM ".table($_GET["select"])." WHERE $p IS NOT NULL AND $p != ''".($Z?" AND ".implode(" AND ",$Z):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$q=fields($_GET["select"]);foreach($this->rowDescriptions($L,$Lb)as$K){$xd=array('{\\'=>'{');foreach($Cc[1]as$X)$xd['{$'."$X}"]=$this->editVal($K[$X],$q[$X]);$lb=$K[$_POST["email_field"]];if(is_mail($lb)&&send_mail($lb,strtr($Sd,$xd),strtr($Hc,$xd),$_POST["email_from"],$_FILES["email_files"]))$Hd++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(43,$Hd));}return
false;}function
selectQueryBuild($M,$Z,$Tb,$ad,$z,$E){return"";}function
messageQuery($H){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$H)."\n-->";}function
editFunctions($p){$J=array();if($p["null"]&&ereg('blob',$p["type"]))$J["NULL"]=lang(4);$J[""]=($p["null"]||$p["auto_increment"]||like_bool($p)?"":"*");if(ereg('date|time',$p["type"]))$J["now"]=lang(44);if(eregi('_(md5|sha1)$',$p["field"],$A))$J[]=strtolower($A[1]);return$J;}function
editInput($Q,$p,$sa,$Y){if($p["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$sa value='-1' checked><i>".lang(5)."</i></label> ":"").enum_input("radio",$sa,$p,($Y||isset($_GET["select"])?$Y:0),($p["null"]?"":null));$Yc=$this->_foreignKeyOptions($Q,$p["field"],$Y);if($Yc!==null)return(is_array($Yc)?"<select$sa>".optionlist($Yc,$Y,true)."</select>":"<input value='".h($Y)."'$sa class='hidden'><input value='".h($Yc)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($Q)."&field=".urlencode($p["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($p))return'<input type="checkbox" value="'.h($Y?$Y:1).'"'.($Y?' checked':'')."$sa>";$Zb="";if(ereg('time',$p["type"]))$Zb=lang(45);if(ereg('date|timestamp',$p["type"]))$Zb=lang(46).($Zb?" [$Zb]":"");if($Zb)return"<input value='".h($Y)."'$sa> ($Zb)";if(eregi('_(md5|sha1)$',$p["field"]))return"<input type='password' value='".h($Y)."'$sa>";return'';}function
processInput($p,$Y,$s=""){if($s=="now")return"$s()";$J=$Y;if(ereg('date|timestamp',$p["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote(lang(30)))).'(.*))',$Y,$A))$J=($A["p1"]!=""?$A["p1"]:($A["p2"]!=""?($A["p2"]<70?20:19).$A["p2"]:gmdate("Y")))."-$A[p3]$A[p4]-$A[p5]$A[p6]".end($A);$J=($p["type"]=="bit"&&ereg('^[0-9]+$',$Y)?$J:q($J));if($Y==""&&like_bool($p))$J="0";elseif($Y==""&&($p["null"]||!ereg('char|text',$p["type"])))$J="NULL";elseif(ereg('^(md5|sha1)$',$s))$J="$s($J)";return
unconvert_field($p,$J);}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($Q,$Rd,$H){global$j;$I=$j->query($H,1);if($I){while($K=$I->fetch_assoc()){if($Rd=="table"){dump_csv(array_keys($K));$Rd="INSERT";}dump_csv($K);}}}function
dumpFilename($cc){return
friendly_url($cc);}function
dumpHeaders($cc,$Lc=false){$zb="csv";header("Content-Type: text/csv; charset=utf-8");return$zb;}function
homepage(){return
true;}function
navigation($Kc){global$ba,$he;echo'<h1>
',$this->name(),' <span class="version">',$ba,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($ba,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Kc=="auth"){$Hb=true;foreach((array)$_SESSION["pwds"]["server"][""]as$V=>$F){if($F!==null){if($Hb){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Hb=false;}echo"<a href='".h(auth_url("server","",$V))."'>".($V!=""?h($V):"<i>".lang(4)."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(47),'" id="logout">
<input type="hidden" name="token" value="',$he,'">
</p>
</form>
';$this->databasesPrint($Kc);if($Kc!="db"&&$Kc!="ns"){$R=table_status();if(!$R)echo"<p class='message'>".lang(6)."\n";else$this->tablesPrint($R);}}}function
databasesPrint($Kc){}function
tablesPrint($S){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($S
as$K){$C=$this->tableName($K);if(isset($K["Engine"])&&$C!="")echo"<a href='".h(ME).'select='.urlencode($K["Name"])."'".bold($_GET["select"]==$K["Name"])." title='".lang(48)."'>$C</a><br>\n";}}function
_foreignColumn($Lb,$g){foreach((array)$Lb[$g]as$Kb){if(count($Kb["source"])==1){$C=$this->rowDescription($Kb["table"]);if($C!=""){$u=idf_escape($Kb["target"][0]);return
array($Kb["table"],$u,$C);}}}}function
_foreignKeyOptions($Q,$g,$Y=null){global$j;if(list($T,$u,$C)=$this->_foreignColumn(column_foreign_keys($Q),$g)){$J=&$this->_values[$T];if($J===null){$R=table_status($T);$J=($R["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $u, $C FROM ".table($T)." ORDER BY 2"));}if(!$J&&$Y!==null)return$j->result("SELECT $C FROM ".table($T)." WHERE $u = ".q($Y));return$J;}}}$c=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($de,$o="",$Da=array(),$ee=""){global$a,$c,$j,$eb;header("Content-Type: text/html; charset=utf-8");if($c->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$fe=$de.($ee!=""?": ".h($ee):"");$ge=strip_tags($fe.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$c->name());echo'<!DOCTYPE html>
<html lang="',$a,'" dir="',lang(49),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$ge,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.6.2",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.6.2",'"></script>
';if($c->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.6.2",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(49),' nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);" onload="bodyLoad(\'',(is_object($j)?substr($j->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="content">
';if($Da!==null){$_=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$eb[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):lang(50));if($Da===false)echo"$N\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Da)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Da)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Da
as$y=>$X){$Xa=(is_array($X)?$X[1]:$X);if($Xa!="")echo'<a href="'.h(ME."$y=").urlencode(is_array($X)?$X[0]:$X).'">'.h($Xa).'</a> &raquo; ';}}echo"$de\n";}}echo"<h2>$fe</h2>\n";restart_session();$ye=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Ic=$_SESSION["messages"][$ye];if($Ic){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Ic)."</div>\n";unset($_SESSION["messages"][$ye]);}$m=&get_session("dbs");if(DB!=""&&$m&&!in_array(DB,$m,true))$m=null;stop_session();if($o)echo"<div class='error'>$o</div>\n";define("PAGE_HEADER",1);}function
page_footer($Kc=""){global$c;echo'</div>

';switch_lang();echo'<div id="menu">
';$c->navigation($Kc);echo'</div>
';}function
int32($B){while($B>=2147483648)$B-=4294967296;while($B<=-2147483649)$B+=4294967296;return(int)$B;}function
long2str($W,$Fe){$Cd='';foreach($W
as$X)$Cd.=pack('V',$X);if($Fe)return
substr($Cd,0,end($W));return$Cd;}function
str2long($Cd,$Fe){$W=array_values(unpack('V*',str_pad($Cd,4*ceil(strlen($Cd)/4),"\0")));if($Fe)$W[]=strlen($Cd);return$W;}function
xxtea_mx($Ke,$Je,$Ud,$oc){return
int32((($Ke>>5&0x7FFFFFF)^$Je<<2)+(($Je>>3&0x1FFFFFFF)^$Ke<<4))^int32(($Ud^$Je)+($oc^$Ke));}function
encrypt_string($Pd,$y){if($Pd=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($Pd,true);$B=count($W)-1;$Ke=$W[$B];$Je=$W[0];$rd=floor(6+52/($B+1));$Ud=0;while($rd-->0){$Ud=int32($Ud+0x9E3779B9);$hb=$Ud>>2&3;for($ed=0;$ed<$B;$ed++){$Je=$W[$ed+1];$Mc=xxtea_mx($Ke,$Je,$Ud,$y[$ed&3^$hb]);$Ke=int32($W[$ed]+$Mc);$W[$ed]=$Ke;}$Je=$W[0];$Mc=xxtea_mx($Ke,$Je,$Ud,$y[$ed&3^$hb]);$Ke=int32($W[$B]+$Mc);$W[$B]=$Ke;}return
long2str($W,false);}function
decrypt_string($Pd,$y){if($Pd=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($Pd,false);$B=count($W)-1;$Ke=$W[$B];$Je=$W[0];$rd=floor(6+52/($B+1));$Ud=int32($rd*0x9E3779B9);while($Ud){$hb=$Ud>>2&3;for($ed=$B;$ed>0;$ed--){$Ke=$W[$ed-1];$Mc=xxtea_mx($Ke,$Je,$Ud,$y[$ed&3^$hb]);$Je=int32($W[$ed]-$Mc);$W[$ed]=$Je;}$Ke=$W[$B];$Mc=xxtea_mx($Ke,$Je,$Ud,$y[$ed&3^$hb]);$Je=int32($W[0]-$Mc);$W[0]=$Je;$Ud=int32($Ud-0x9E3779B9);}return
long2str($W,true);}$j='';$he=$_SESSION["token"];if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);$id=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($y)=explode(":",$X);$id[$y]=$X;}}$e=$_POST["auth"];if($e){session_regenerate_id();$_SESSION["pwds"][$e["driver"]][$e["server"]][$e["username"]]=$e["password"];$_SESSION["db"][$e["driver"]][$e["server"]][$e["username"]][$e["db"]]=true;if($e["permanent"]){$y=base64_encode($e["driver"])."-".base64_encode($e["server"])."-".base64_encode($e["username"])."-".base64_encode($e["db"]);$od=$c->permanentLogin();$id[$y]="$y:".base64_encode($od?encrypt_string($e["password"],$od):"");cookie("adminer_permanent",implode(" ",$id));}if(count($_POST)==1||DRIVER!=$e["driver"]||SERVER!=$e["server"]||$_GET["username"]!==$e["username"]||DB!=$e["db"])redirect(auth_url($e["driver"],$e["server"],$e["username"],$e["db"]));}elseif($_POST["logout"]){if($he&&$_POST["token"]!=$he){page_header(lang(47),lang(51));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$y)set_session($y,null);unset_permanent();redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),lang(52));}}elseif($id&&!$_SESSION["pwds"]){session_regenerate_id();$od=$c->permanentLogin();foreach($id
as$y=>$X){list(,$Ga)=explode(":",$X);list($db,$N,$V,$n)=array_map('base64_decode',explode("-",$y));$_SESSION["pwds"][$db][$N][$V]=decrypt_string(base64_decode($Ga),$od);$_SESSION["db"][$db][$N][$V][$n]=true;}}function
unset_permanent(){global$id;foreach($id
as$y=>$X){list($db,$N,$V)=array_map('base64_decode',explode("-",$y));if($db==DRIVER&&$N==SERVER&&$n==$_GET["username"])unset($id[$y]);}cookie("adminer_permanent",implode(" ",$id));}function
auth_error($wb=null){global$j,$c,$he;$Kd=session_name();$o="";if(!$_COOKIE[$Kd]&&$_GET[$Kd]&&ini_bool("session.use_only_cookies"))$o=lang(53);elseif(isset($_GET["username"])){if(($_COOKIE[$Kd]||$_GET[$Kd])&&!$he)$o=lang(54);else{$F=&get_session("pwds");if($F!==null){$o=h($wb?$wb->getMessage():(is_string($j)?$j:lang(55)));$F=null;}unset_permanent();}}page_header(lang(23),$o,null);echo"<form action='' method='post'>\n";$c->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(56),lang(57,implode(", ",$ld)),false);page_footer("auth");exit;}$j=connect();}if(is_string($j)||!$c->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$he=$_SESSION["token"];if($e&&$_POST["token"])$_POST["token"]=$he;$o=($_POST?($_POST["token"]==$he?"":lang(51)):($_SERVER["REQUEST_METHOD"]!="POST"?"":lang(58,'"post_max_size"')));if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_cache_limiter("");session_write_close();}$j->select_db($c->database());function
email_header($Xb){return"=?UTF-8?B?".base64_encode($Xb)."?=";}function
send_mail($lb,$Sd,$Hc,$Rb="",$Fb=array()){$rb=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$Hc=str_replace("\n",$rb,wordwrap(str_replace("\r","","$Hc\n")));$Ca=uniqid("boundary");$ra="";foreach((array)$Fb["error"]as$y=>$X){if(!$X)$ra.="--$Ca$rb"."Content-Type: ".str_replace("\n","",$Fb["type"][$y]).$rb."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$Fb["name"][$y])."\"$rb"."Content-Transfer-Encoding: base64$rb$rb".chunk_split(base64_encode(file_get_contents($Fb["tmp_name"][$y])),76,$rb).$rb;}$za="";$Yb="Content-Type: text/plain; charset=utf-8$rb"."Content-Transfer-Encoding: 8bit";if($ra){$ra.="--$Ca--$rb";$za="--$Ca$rb$Yb$rb$rb";$Yb="Content-Type: multipart/mixed; boundary=\"$Ca\"";}$Yb.=$rb."MIME-Version: 1.0$rb"."X-Mailer: Adminer Editor".($Rb?$rb."From: ".str_replace("\n","",$Rb):"");return
mail($lb,email_header($Sd),$za.$Hc.$ra,$Yb);}function
like_bool($p){return
ereg("bool|(tinyint|bit)\\(1\\)",$p["full_type"]);}$Rc="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$eb[DRIVER]=lang(23);if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$b=$_GET["download"];$q=fields($b);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$b-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$j->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($b)," WHERE ".where($_GET,$q),1));exit;}elseif(isset($_GET["edit"])){$b=$_GET["edit"];$q=fields($b);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$q):""):where($_GET,$q));$xe=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($q
as$C=>$p){if(!isset($p["privileges"][$xe?"update":"insert"])||$c->fieldName($p)=="")unset($q[$C]);}if($_POST&&!$o&&!isset($_GET["select"])){$zc=$_POST["referer"];if($_POST["insert"])$zc=($xe?null:$_SERVER["REQUEST_URI"]);elseif(!ereg('^.+&select=.+$',$zc))$zc=ME."select=".urlencode($b);if(isset($_POST["delete"]))query_redirect("DELETE".limit1("FROM ".table($b)," WHERE $Z"),$zc,lang(59));else{$O=array();foreach($q
as$C=>$p){$X=process_input($p);if($X!==false&&$X!==null)$O[idf_escape($C)]=($xe?"\n".idf_escape($C)." = $X":$X);}if($xe){if(!$O)redirect($zc);query_redirect("UPDATE".limit1(table($b)." SET".implode(",",$O),"\nWHERE $Z"),$zc,lang(60));}else{$I=insert_into($b,$O);$vc=($I?last_id():0);queries_redirect($zc,lang(61,($vc?" $vc":"")),$I);}}}$Xd=$c->tableName(table_status($b));page_header(($xe?lang(62):lang(40)),$o,array("select"=>array($b,$Xd)),$Xd);$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($Z){$M=array();foreach($q
as$C=>$p){if(isset($p["privileges"]["select"])){$pa=convert_field($p);if($_POST["clone"]&&$p["auto_increment"])$pa="''";if($nc=="sql"&&ereg("enum|set",$p["type"]))$pa="1*".idf_escape($C);$M[]=($pa?"$pa AS ":"").idf_escape($C);}}$K=array();if($M){$L=get_rows("SELECT".limit(implode(", ",$M)." FROM ".table($b)," WHERE $Z",(isset($_GET["select"])?2:1)));$K=(isset($_GET["select"])&&count($L)!=1?null:reset($L));}}if($K===false)echo"<p class='error'>".lang(63)."\n";echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$q)echo"<p class='error'>".lang(64)."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($q
as$C=>$p){echo"<tr><th>".$c->fieldName($p);$Wa=$_GET["set"][bracket_escape($C)];$Y=($K!==null?($K[$C]!=""&&$nc=="sql"&&ereg("enum|set",$p["type"])?(is_array($K[$C])?array_sum($K[$C]):+$K[$C]):$K[$C]):(!$xe&&$p["auto_increment"]?"":(isset($_GET["select"])?false:($Wa!==null?$Wa:$p["default"]))));if(!$_POST["save"]&&is_string($Y))$Y=$c->editVal($Y,$p);$s=($_POST["save"]?(string)$_POST["function"][$C]:($xe&&$p["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if($p["type"]=="timestamp"&&$Y=="CURRENT_TIMESTAMP"){$Y="";$s="now";}input($p,$Y,$s);echo"\n";}echo"</table>\n";}echo'<p>
';if($q){echo"<input type='submit' value='".lang(65)."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($xe?lang(66):lang(67))."' title='Ctrl+Shift+Enter'>\n";}echo($xe?"<input type='submit' name='delete' value='".lang(68)."' onclick=\"return confirm('".lang(0)."');\">\n":($_POST||!$q?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$he,'">
</form>
';}elseif(isset($_GET["select"])){$b=$_GET["select"];$R=table_status($b);$x=indexes($b);$q=fields($b);$Mb=column_foreign_keys($b);$Qc="";if($R["Oid"]=="t"){$Qc=($nc=="sqlite"?"rowid":"oid");$x[]=array("type"=>"PRIMARY","columns"=>array($Qc));}parse_str($_COOKIE["adminer_import"],$ka);$Ad=array();$h=array();$ae=null;foreach($q
as$y=>$p){$C=$c->fieldName($p);if(isset($p["privileges"]["select"])&&$C!=""){$h[$y]=html_entity_decode(strip_tags($C));if(is_shortable($p))$ae=$c->selectLengthProcess();}$Ad+=$p["privileges"];}list($M,$Tb)=$c->selectColumnsProcess($h,$x);$lc=count($Tb)<count($M);$Z=$c->selectSearchProcess($q,$x);$ad=$c->selectOrderProcess($q,$x);$z=$c->selectLimitProcess();$Rb=($M?implode(", ",$M):"*".($Qc?", $Qc":""));if($nc=="sql"){foreach($h
as$y=>$X){$pa=convert_field($q[$y]);if($pa)$Rb.=", $pa AS ".idf_escape($y);}}$Rb.="\nFROM ".table($b);$Ub=($Tb&&$lc?"\nGROUP BY ".implode(", ",$Tb):"").($ad?"\nORDER BY ".implode(", ",$ad):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$te=>$K){$pa=convert_field($q[key($K)]);echo$j->result("SELECT".limit(($pa?$pa:idf_escape(key($K)))." FROM ".table($b)," WHERE ".where_check($te,$q).($Z?" AND ".implode(" AND ",$Z):"").($ad?" ORDER BY ".implode(", ",$ad):""),1));}exit;}if($_POST&&!$o){$He="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$md=$ve=null;foreach($x
as$w){if($w["type"]=="PRIMARY"){$md=array_flip($w["columns"]);$ve=($M?$md:array());break;}}foreach((array)$ve
as$y=>$X){if(in_array(idf_escape($y),$M))unset($ve[$y]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($b);$c->dumpTable($b,"");if(!is_array($_POST["check"])||$ve===array()){$Ge=$Z;if(is_array($_POST["check"]))$Ge[]="($He)";$H="SELECT $Rb".($Ge?"\nWHERE ".implode(" AND ",$Ge):"").$Ub;}else{$re=array();foreach($_POST["check"]as$X)$re[]="(SELECT".limit($Rb,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$q).$Ub,1).")";$H=implode(" UNION ALL ",$re);}$c->dumpData($b,"table",$H);exit;}if(!$c->selectEmailProcess($Z,$Mb)){if($_POST["save"]||$_POST["delete"]){$I=true;$la=0;$H=table($b);$O=array();if(!$_POST["delete"]){foreach($h
as$C=>$X){$X=process_input($q[$C]);if($X!==null){if($_POST["clone"])$O[idf_escape($C)]=($X!==false?$X:idf_escape($C));elseif($X!==false)$O[]=idf_escape($C)." = $X";}}$H.=($_POST["clone"]?" (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($b):" SET\n".implode(",\n",$O));}if($_POST["delete"]||$O){$Ma="UPDATE";if($_POST["delete"]){$Ma="DELETE";$H="FROM $H";}if($_POST["clone"]){$Ma="INSERT";$H="INTO $H";}if($_POST["all"]||($ve===array()&&$_POST["check"])||$lc){$I=queries("$Ma $H".($_POST["all"]?($Z?"\nWHERE ".implode(" AND ",$Z):""):"\nWHERE $He"));$la=$j->affected_rows;}else{foreach((array)$_POST["check"]as$X){$I=queries($Ma.limit1($H,"\nWHERE ".where_check($X,$q)));if(!$I)break;$la+=$j->affected_rows;}}}$Hc=lang(69,$la);if($_POST["clone"]&&$I&&$la==1){$vc=last_id();if($vc)$Hc=lang(61," $vc");}queries_redirect(remove_from_uri("page"),$Hc,$I);}elseif(!$_POST["import"]){if(!$_POST["val"])$o=lang(70);else{$I=true;$la=0;foreach($_POST["val"]as$te=>$K){$O=array();foreach($K
as$y=>$X){$y=bracket_escape($y,1);$O[]=idf_escape($y)." = ".(ereg('char|text',$q[$y]["type"])||$X!=""?$c->processInput($q[$y],$X):"NULL");}$H=table($b)." SET ".implode(", ",$O);$Ge=" WHERE ".where_check($te,$q).($Z?" AND ".implode(" AND ",$Z):"");$I=queries("UPDATE".($lc?" $H$Ge":limit1($H,$Ge)));if(!$I)break;$la+=$j->affected_rows;}queries_redirect(remove_from_uri(),lang(69,$la),$I);}}elseif(is_string($Db=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($ka["output"])."&format=".urlencode($_POST["separator"]));$I=true;$La=array_keys($q);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Db,$Cc);$la=count($Cc[0]);begin();$Id=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($Cc[0]as$y=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$Id]*)$Id~",$X.$Id,$Dc);if(!$y&&!array_diff($Dc[1],$La)){$La=$Dc[1];$la--;}else{$O=array();foreach($Dc[1]as$t=>$Ja)$O[idf_escape($La[$t])]=($Ja==""&&$q[$La[$t]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ja))));$I=insert_update($b,$O,$md);if(!$I)break;}}if($I)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(71,$la),$I);queries("ROLLBACK");}else$o=upload_error($Db);}}$Xd=$c->tableName($R);if(is_ajax())ob_start();page_header(lang(36).": $Xd",$o);$O=null;if(isset($Ad["insert"])){$O="";foreach((array)$_GET["where"]as$X){if(count($Mb[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!ereg('[_%]',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$c->selectLinks($R,$O);if(!$h)echo"<p class='error'>".lang(72).($q?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($b).'">',"</div>\n";$c->selectColumnsPrint($M,$h);$c->selectSearchPrint($Z,$h,$x);$c->selectOrderPrint($ad,$h,$x);$c->selectLimitPrint($z);$c->selectLengthPrint($ae);$c->selectActionPrint($x);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$Pb=$j->result("SELECT COUNT(*) FROM ".table($b).($Z?" WHERE ".implode(" AND ",$Z):""));$E=floor(max(0,$Pb-1)/$z);}$H=$c->selectQueryBuild($M,$Z,$Tb,$ad,$z,$E);if(!$H)$H="SELECT".limit((+$z&&$Tb&&$lc&&$nc=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Rb,($Z?"\nWHERE ".implode(" AND ",$Z):"").$Ub,($z!=""?+$z:null),($E?$z*$E:0),"\n");echo$c->selectQuery($H);$I=$j->query($H);if(!$I)echo"<p class='error'>".error()."\n";else{if($nc=="mssql")$I->seek($z*$E);$nb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$nc=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last")$Pb=(+$z&&$Tb&&$lc?($nc=="sql"?$j->result(" SELECT FOUND_ROWS()"):$j->result("SELECT COUNT(*) FROM ($H) x")):count($L));if(!$L)echo"<p class='message'>".lang(63)."\n";else{$ya=$c->backwardKeys($b,$Xd);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Tb&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(73)."</a>");$Nc=array();$Sb=array();reset($M);$td=1;foreach($L[0]as$y=>$X){if($y!=$Qc){$X=$_GET["columns"][key($M)];$p=$q[$M?($X?$X["col"]:current($M)):$y];$C=($p?$c->fieldName($p,$td):"*");if($C!=""){$td++;$Nc[$y]=$C;$g=idf_escape($y);$bc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($y);$Xa="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($bc.($ad[0]==$g||$ad[0]==$y||(!$ad&&$lc&&$Tb[0]==$g)?$Xa:'')).'">';echo(!$M||$X?apply_sql_function($X["fun"],$C):h(current($M)))."</a>";echo"<span class='column hidden'>","<a href='".h($bc.$Xa)."' title='".lang(74)."' class='text'> ↓</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($y)).'\'); return false;" title="'.lang(31).'" class="text jsonly"> =</a>';echo"</span>";}$Sb[$y]=$X["fun"];next($M);}}$yc=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$y=>$X)$yc[$y]=max($yc[$y],min(40,strlen(utf8_decode($X))));}}echo($ya?"<th>".lang(75):"")."</thead>\n";if(is_ajax()){if($z%2==1&&$E%2==1)odd();ob_end_clean();}foreach($c->rowDescriptions($L,$Mb)as$B=>$K){$se=unique_array($L[$B],$x);$te="";foreach($se
as$y=>$X)$te.="&".($X!==null?urlencode("where[".bracket_escape($y)."]")."=".urlencode($X):"null%5B%5D=".urlencode($y));echo"<tr".odd().">".(!$Tb&&$M?"":"<td>".checkbox("check[]",substr($te,1),in_array(substr($te,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($lc||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($b).$te)."'>".lang(73)."</a>"));foreach($K
as$y=>$X){if(isset($Nc[$y])){$p=$q[$y];if($X!=""&&(!isset($nb[$y])||$nb[$y]!=""))$nb[$y]=(is_mail($X)?$Nc[$y]:"");$_="";$X=$c->editVal($X,$p);if($X!==null){if(ereg('blob|bytea|raw|file',$p["type"])&&$X!="")$_=ME.'download='.urlencode($b).'&field='.urlencode($y).$te;if($X==="")$X="&nbsp;";elseif(is_utf8($X)){if($ae!=""&&is_shortable($p))$X=shorten_utf8($X,max(0,+$ae));else$X=h($X);}if(!$_){foreach((array)$Mb[$y]as$r){if(count($Mb[$y])==1||end($r["source"])==$y){$_="";foreach($r["source"]as$t=>$Ld)$_.=where_link($t,$r["target"][$t],$L[$B][$Ld]);$_=($r["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($r["db"]),ME):ME).'select='.urlencode($r["table"]).$_;if(count($r["source"])==1)break;}}}if($y=="COUNT(*)"){$_=ME."select=".urlencode($b);$t=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$se))$_.=where_link($t++,$W["col"],$W["val"],$W["op"]);}foreach($se
as$oc=>$W)$_.=where_link($t++,$oc,$W);}}if(!$_){if(is_mail($X))$_="mailto:$X";if($qd=is_url($K[$y]))$_=($qd=="http"&&$aa?$K[$y]:"$qd://www.adminer.org/redirect/?url=".urlencode($K[$y]));}$u=h("val[$te][".bracket_escape($y)."]");$Y=$_POST["val"][$te][bracket_escape($y)];$Wb=h($Y!==null?$Y:$K[$y]);$Ac=strpos($X,"<i>...</i>");$jb=is_utf8($X)&&$L[$B][$y]==$K[$y]&&!$Sb[$y];$Zd=ereg('text|lob',$p["type"]);echo(($_GET["modify"]&&$jb)||$Y!==null?"<td>".($Zd?"<textarea name='$u' cols='30' rows='".(substr_count($K[$y],"\n")+1)."'>$Wb</textarea>":"<input name='$u' value='$Wb' size='$yc[$y]'>"):"<td id='$u' onclick=\"selectClick(this, event, ".($Ac?2:($Zd?1:0)).($jb?"":", '".h(lang(76))."'").");\">".$c->selectVal($X,$_,$p));}}if($ya)echo"<td>";$c->backwardKeysPrint($ya,$L[$B]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n",(!$Tb&&$M?"":"<script type='text/javascript'>tableCheck();</script>\n");}if(($L||$E)&&!is_ajax()){$vb=true;if($_GET["page"]!="last"&&+$z&&!$lc&&($Pb>=$z||$E)){$Pb=found_rows($R,$Z);if($Pb<max(1e4,2*($E+1)*$z))$Pb=reset(slow_query("SELECT COUNT(*) FROM ".table($b).($Z?" WHERE ".implode(" AND ",$Z):"")));else$vb=false;}echo"<p class='pages'>";if(+$z&&($Pb===false||$Pb>$z)){$Ec=($Pb===false?$E+(count($L)>=$z?2:1):floor(($Pb-1)/$z));echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(77)."', '".($E+1)."'), event); return false;\">".lang(77)."</a>:",pagination(0,$E).($E>5?" ...":"");for($t=max(1,$E-4);$t<min($Ec,$E+5);$t++)echo
pagination($t,$E);echo($E+5<$Ec?" ...":"").($vb&&$Pb!==false?pagination($Ec,$E):' <a href="'.h(remove_from_uri("page")."&page=last").'">'.lang(78)."</a>");}echo($Pb!==false?" (".($vb?"":"~ ").lang(79,$Pb).")":""),(+$z&&($Pb===false?count($L)+1:$Pb-$E*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" onclick="return !selectLoadMore(this, '.(+$z).', \''.lang(80).'\');">'.lang(81).'</a>':'')," ".checkbox("all",1,0,lang(82))."\n";if($c->selectCommandPrint()){echo'<fieldset><legend>',lang(62),'</legend><div>
<input type="submit" value="',lang(65),'"',($_GET["modify"]?'':' title="'.lang(70).'" class="jsonly"'),'>
<input type="submit" name="edit" value="',lang(62),'">
<input type="submit" name="clone" value="',lang(83),'">
<input type="submit" name="delete" value="',lang(68),'" onclick="return confirm(\'',lang(0);?> (' + (this.form['all'].checked ? <?php echo$Pb,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$Nb=$c->dumpFormat();if($Nb){print_fieldset("export",lang(84));$dd=$c->dumpOutput();echo($dd?html_select("output",$dd,$ka["output"])." ":""),html_select("format",$Nb,$ka["format"])," <input type='submit' name='export' value='".lang(84)."'>\n","</div></fieldset>\n";}}if($c->selectImportPrint()){print_fieldset("import",lang(85),!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ka["format"],1);echo" <input type='submit' name='import' value='".lang(85)."'>","</div></fieldset>\n";}$c->selectEmailPrint(array_filter($nb,'strlen'),$h);echo"<p><input type='hidden' name='token' value='$he'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["script"])){if($_GET["script"]=="kill")$j->query("KILL ".(+$_POST["kill"]));elseif(list($Q,$u,$C)=$c->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$I=$j->query("SELECT $u, $C FROM ".table($Q)." WHERE ".(ereg('^[0-9]+$',$_GET["value"])?"$u = $_GET[value] OR ":"")."$C LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT 11");for($t=0;$t<10&&($K=$I->fetch_row());$t++)echo"<a href='".h(ME."edit=".urlencode($Q)."&where".urlencode("[".bracket_escape(idf_unescape($u))."]")."=".urlencode($K[0]))."'>".h($K[1])."</a><br>\n";if($t==10)echo"...\n";}exit;}else{page_header(lang(50),"",false);if($c->homepage()){echo"<form action='' method='post'>\n","<p>".lang(86).": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".lang(31)."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.lang(87).'<td>'.lang(88)."</thead>\n";foreach(table_status()as$Q=>$K){$C=$c->tableName($K);if(isset($K["Engine"])&&$C!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$Q,in_array($Q,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($Q)."'>$C</a>";$X=number_format($K["Rows"],0,'.',lang(7));echo"<td align='right'><a href='".h(ME."edit=").urlencode($Q)."'>".($K["Engine"]=="InnoDB"&&$X?"~ $X":$X)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();