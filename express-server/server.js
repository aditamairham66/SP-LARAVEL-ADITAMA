const express = require('express');
const cors = require('cors');
const bodyParser = require('body-parser');

const app = express();
const PORT = process.env.PORT || 3000;

app.use(cors());
app.use(bodyParser.json());

// Data Dummy (Diskon per pelanggan)
const discountRules = {
    1: 0.1, // 10% untuk customer_id 1
    2: 0.15, // 15% untuk customer_id 2
};

// API: Hitung Diskon
app.post('/calculate-discount', (req, res) => {
    const { customer_id, total_price } = req.body;

    if (!customer_id || !total_price) {
        return res.status(400).json({ message: "customer_id dan total_price wajib diisi" });
    }

    const discountRate = discountRules[customer_id] || 0.05; // Default 5%
    const discount = total_price * discountRate;
    const final_price = total_price - discount;

    res.json({ discount, final_price });
});

// API: Notifikasi Pesanan
app.post('/notify-order', (req, res) => {
    console.log("Pesanan baru diterima:", req.body);
    res.json({ message: "Notifikasi diterima" });
});

// Jalankan server
app.listen(PORT, () => {
    console.log(`Express.js server running on http://localhost:${PORT}`);
});
