class CreateMseekitouts < ActiveRecord::Migration[5.0]
  def change
    create_table :mseekitouts do |t|
      t.string :name
      t.string :phone
      t.srting :email

      t.timestamps
    end
    create_table :mbookings do |t|
      t.string :name
      t.string :phone
      t.srting :email
      t.string :amount

      t.timestamps
    end
    create_table :mrestaurents do |t|
      t.string :name
      t.string :total_seat
      t.string :rest_id
      t.string :avail_seat
      t.text :location

      t.timestamps
    end
  end
end
