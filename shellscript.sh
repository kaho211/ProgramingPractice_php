#!/bin/sh

now=$(TZ=JST-9 date +%H) #午前か午後を判定するために時間だけ抽出

if [ $now -lt "12" ] #実行時刻が午前の場合
then 
 ls -la > shellscript.txt #ls -laの出力結果をファイルに書き出す
else #事項時間が午後の場合
 TZ=JST-9 date +%Y年%m月%d日%H時%M分 #現在時刻を年月日時分形式で表示
fi