@echo off
set path="C:\Users\Raihan Tusher\AppData\Local\Programs\Python\Python37-32\";%path%
set path="C:\Users\Raihan Tusher\AppData\Local\Programs\Python\Python37-32\Scripts\";%path%


set arg1=%1
set arg2=%2
shift
shift
python  solution.py < input.txt > output.txt 2> error.txt
