class Producte {
    constructor(referencia, nom,marca,categoria,pvp) {
      this.referencia = referencia;
      this.nom = nom;
      this.marca = marca;
      this.categoria = categoria;
      this.pvp = pvp;
    }
    print(){
        return this.referencia+" - "+this.nom+" - "+this.marca+" - "+this.categoria+" - "+this.pvp;
    }
    discount(quantity){
        return this.pvp= this.pvp-this.pvp*quantity;
    }
    getReferencia(){
        return this.referencia;
    }
    getCategoria(){
        return this.categoria;
    }
    getPrice(){
        return this.pvp;
    }
  }