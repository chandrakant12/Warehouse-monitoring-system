"""
pip3 install pafy
pip3 install youtube_dl



"""

import cv2
import pafy
import numpy as np

url = "https://www.youtube.com/watch?v=EEIk7gwjgIM"
video = pafy.new(url)
best = video.getbest(preftype="mp4")

capture = cv2.VideoCapture()
capture.open(best.url)


while(capture.isOpened()):
    ret, frame = capture.read()

    gray = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)

    cv2.imshow('frame',gray)
    if cv2.waitKey(1) & 0xFF == ord('q'):
        break

capture.release()
cv2.destroyAllWindows()