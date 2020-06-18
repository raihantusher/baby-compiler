@echo off
set path="C:\Users\Raihan Tusher\AppData\Local\Programs\Python\Python37-32\";%path%
set path="C:\Users\Raihan Tusher\AppData\Local\Programs\Python\Python37-32\Scripts\";%path%

TIMEOUT /T 10
set solution=%1
set input=%2
set output=%3
set error=%4
shift
shift
shift
shift
python  %solution% < %input% > %output% 2> %error%
