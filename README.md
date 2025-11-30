<div align="center">
  
https://www.smspower.tel

</div>

🚀 What is SMS Power?
SMS Power is a modern bulk SMS gateway platform that enables developers and businesses to send text messages globally via multiple GSM gateways. Our platform features seamless cryptocurrency payments (USDT/USDC) and real-time monitoring.

Key Features
💸 Pay with Crypto - USDT & USDC payments on multiple networks (SOL, TRC20, ERC20, BEP20)

🌍 Global Coverage - Send SMS to 190+ countries via load-balanced gateways

⚡ REST API - Easy integration with any programming language

📊 Real-time Analytics - Track delivery status and comprehensive reports

🔒 High Deliverability - Multi-gateway load balancing for 99%+ delivery rates

🔔 Telegram Notifications - Real-time alerts for orders, SMS delivery, and system events

🛡️ Enterprise Security - JWT authentication, rate limiting, and Helmet security



🛠 Quick Start

**1. Get Your API Key**

# Register at smspower.tel and get your free credits
# No credit card required - just email verification


**2. Send Your First SMS**

const axios = require('axios');

const API_KEY = "your_api_key_here";
const API_URL = "https://smspower.tel/api/sms/send";

async function sendSMS() {
  try {
    const response = await axios.post(API_URL, {
      number: "+1234567890",
      message: "Hello from SMS Power!"
    }, {
      headers: {
        'Authorization': `Bearer ${API_KEY}`,
        'Content-Type': 'application/json'
      }
    });

    console.log('SMS sent successfully:', response.data);
  } catch (error) {
    console.error('Error sending SMS:', error.response?.data);
  }
}

sendSMS();




💰 Crypto Payment Integration
Supported Cryptocurrencies
USDT (TRC20, ERC20, BEP20)

USDC (SOL, TRC20, ERC20, BEP20)

Payment Process
Login to your dashboard at your deployment URL

Navigate to Orders → Create New Order

Select payment method (USDT or USDC)

Send crypto to your assigned wallet address

Credits automatically added after admin confirmation (usually within 2-5 minutes)


