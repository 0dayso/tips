@echo off
tasklist /nh|find /i "php.exe"
if ERRORLEVEL 1 (echo Сʱ�������񻯽�Ҫ��ʼ......) else ((echo ������������,�����˳�......)&pause&exit)

@echo ����������Ϻ�,�ô��ڽ��Զ��ر�......
@echo �벻Ҫ�رոô���.....Ȼ�����ĵȴ�......
D:
cd D:\WWW\MeteoProduct
D:\phpStudy\php53\php.exe cli.php /Synchronism/Gridmeteodata/index
::pause