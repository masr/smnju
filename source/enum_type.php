<?php

$_SGLOBAL['enum']['gender']=array(1=>'男',0=>'女',-1=>'未指定');

function reverse_enum($array){
	foreach ($array as $key=>$value)
	{
		$array[$value]=$key;
	}
	return $array;
}



$_SGLOBAL['enum']['grade']=array('b2008'=>'本科2008级','b2009'=>'本科2009级','b2010'=>'本科2010级','b2011'=>'本科2011级','mf2009'=>'研究生2009级','mf2010'=>'研究生2010级','mf2011'=>'研究生2011级');
$_SGLOBAL['enum']['institute']=array
(
-1=>'未指定',
2=>'中国语言文学系',
3=>'中美文化研究中心',
4=>'临床医学系',
5=>'会计学系',
6=>'传播学系',
7=>'俄语系',
8=>'信息管理系',
9=>'信息系统工程系',
10=>'光通信工程研究中心',
11=>'政府管理学院',
12=>'化学化工学院',
13=>'化工系',
14=>'匡亚明学院',
15=>'历史学系',
16=>'哲学系',
17=>'哲学系与宗教学系',
18=>'商学院',
19=>'国际商务系',
20=>'国际应用文科强化班',
21=>'国际经济法学系',
22=>'国际经济贸易系',
23=>'地球科学系',
24=>'地理与海洋科学学院',
25=>'基础医学系',
26=>'基础学科教育学院',
27=>'声学系',
28=>'外国语学院',
29=>'大学外语部',
30=>'大气科学系',
31=>'天文学系',
32=>'嵌入式技术系',
33=>'工商管理系',
34=>'工程管理学院',
35=>'市场营销系',
36=>'广告学系',
37=>'应用文强',
38=>'建筑研究所',
39=>'强化部',
40=>'德语系',
41=>'思想品德教研部',
42=>'控制与系统工程系',
43=>'政治与行政管理学系',
44=>'教育科学与管理系',
45=>'数学系',
46=>'文化艺术教育中心',
47=>'新闻学系',
48=>'日语系',
49=>'材料科学与工程系',
50=>'水科学系',
51=>'江苏省物流技术工程中心',
52=>'法学院',
53=>'法语系',
54=>'海外教育学院',
55=>'物理学系',
56=>'物理系',
57=>'环境学院',
58=>'环境工程系',
59=>'环境科学系',
60=>'生物化学系',
61=>'生物科学与技术系',
62=>'电子商务系',
63=>'电子科学与工程系',
64=>'社会学系',
65=>'管理科学与工程系',
66=>'经济学系',
67=>'经济法学系',
68=>'继续教育学院',
69=>'自动化',
70=>'英语系',
71=>'西班牙语系',
72=>'计算机科学与技术系',
73=>'软件学院',
74=>'软件工程系',
75=>'金融学系',
76=>'金陵学院',
77=>'金陵西语',
78=>'高分子科学与工程系',
79=>'其它院系',
);

?>