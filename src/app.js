document.addEventListener('alpine:init', () => {
    Alpine.data('products', () => ({
        items : [
            { id: 1, name : 'Almond Chocolate', img: '1.jpg', price: 40000},
            { id: 2, name : 'Candy Coating Chocolate', img: '2.jpg', price: 15000},
            { id: 3, name : 'Dark Chocolate', img: '3.jpg', price: 25000},
            { id: 4, name : 'Hazelnut Chocolate', img: '4.jpg', price: 30000},
            { id: 5, name : 'Strrawberry Chocolate', img: '5.jpg', price: 40000},
            { id: 6, name : 'White Chocolate', img: '6.jpg', price: 25000},
        ],     
    }));

    Alpine.store('cart',{
        items: [],
        total: 0,
        quantity: 0,
        add(newItem){
            //cek apakah ada barang yang sama
            const cariItem = this.items.find((item) => item.id === nerItem);

            //jika belum ada

            if(!cariItem){
                this.item.push({...newItem, quantity: 1, total: newItem.price});
                this.quantity++;
                this.total += newItem.price;
            } else {
                //jika barang sudah ada apakah barang beda atau sama
                this.items = this.items.map((item) => {
                    //jika barang berbeda
                    if(item.id !== newItem.id){
                        return item;
                    } else {
                        //jika barang sudah ada
                        item.quantity++;
                        item.total= item.price * item.quantity;
                        this.quantity++;
                        this.total += item.price;
                        return item;
                    }
                    
                });
            }
        },
        remov(id){
            //ambil item yang mau di remove berdasakrn id
            const cariItem = this.itemsfind((item) => item.id == id);

            //jika item lebih darei 1

            if (cariItem.quantity > 1){
                // telususri 11
                this.items = this.items.map((item) => {
                    //jika bukan barang yang di klik
                    if(item.id !== id){
                        return item;
                    }else {
                        item.quantity--;
                        item.total = item.price * item.quantity;
                        this.total -= item.price;
                        return item;
                    }
                })
            }
        }
    });
});

// konversi ke rupiah
const rupiah = (number) => {
    return new Intl.NumberFormat('id-ID',{
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0,
    }).format(number);
}