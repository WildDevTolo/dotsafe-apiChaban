// Countdown script //


setInterval(() => {
 const closingDateSelector = document.querySelector('.closingDate')
 const closingDateData = closingDateSelector.dataset.date

 const todaySelector = document.querySelector('#today')
 const todayData = todaySelector.dataset.today

 const now = new Date();
 const nowDigits = now.toLocaleTimeString('default', {
  hour: '2-digit',
  minute: '2-digit',
  second: '2-digit',
 })
 const fullNow = todayData + ' ' + nowDigits

 const closingDate = new Date(closingDateData).getTime()
 const today = new Date(fullNow).getTime()

 const difference = closingDate - today

 const days = Math.floor(difference / (1000 * 60 * 60 * 24))
 const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))
 const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60))
 const seconds = Math.floor((difference % (1000 * 60) / 1000))

 document.getElementById('days').innerText = days + "j"
 document.getElementById('hours').innerText = hours + "h"
 document.getElementById('minutes').innerText = minutes + "m"
 document.getElementById('seconds').innerText = seconds + "s"
}, 1000)

