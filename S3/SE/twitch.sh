#!/bin/bash
channel=$1
livestreamer -p mplayer http://www.twitch.tv/$channel best &
exo-open --launch WebBrowser http://www.twitch.tv/chat/embed?channel=$channel&popout_chat=true
