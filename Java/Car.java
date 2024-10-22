class Car {
  private Integer id;
  private String license;
  private Account driver;
  private Integer passenger;

  public Car(String license, Account driver) {
    this.license = license;
    this.driver = driver;
  }

  void printDataCar() {
    if(passenger != null){
      System.out.println("License: " + license + " Name Driver: " + driver.name + " Passengers: " + passenger);
    }
  }

  public Integer getPassenger(){
    return passenger;
  }

  public void setPassenger(Integer passenger){
    if(passenger == 4){
      this.passenger = passenger;
    } else {
      System.out.println("Necesitas asignar 4 pasajeros");
    }  
  }

    /**
     * @return the id
     */
    public Integer getId() {
      return id;
  }

  /**
   * @param id the id to set
   */
  public void setId(Integer id) {
      this.id = id;
  }

  /**
   * @return the license
   */
  public String getLicense() {
      return license;
  }

  /**
   * @param license the license to set
   */
  public void setLicense(String license) {
      this.license = license;
  }

  /**
   * @return the driver
   */
  public Account getDriver() {
      return driver;
  }

  /**
   * @param driver the driver to set
   */
  public void setDriver(Account driver) {
      this.driver = driver;
  }

}