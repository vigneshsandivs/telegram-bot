import telegram.ext


def start(update, context):
    update.message.reply_text("Welcome")

token = "5089228115:AAEYxlpIzTTWJGcjqJZmOnB3YdaXLZY9Rec"

updater = telegram.ext.Updater(token, use_context=True)

command = updater.dispatcher

command.add_handler(telegram.ext.CommandHandler("Help", start))


updater.start_polling()
updater.idle()